const colourClassNames = ["black", "blue", "light-blue", "purple", "red", "green", "yellow", "grey", "pink", "orange", "burnt-red", "no-border"];
const sizeClassNames = ["small-input", "medium-input", "medium1-input", "medium2-input", "large-input"];

function save_pdf(test) {
  let oldValues = [];
  let oldOuterHTML = []
  let colourClassToAdd = [];
  let sizeClassToAdd = [];
  let heights = [];
  for (let i of $('textarea')) {
    oldValues.push(i.value);
    let outerHTML = i.outerHTML.split("</");
    let height = i.offsetHeight;
    heights.push(height);
    oldOuterHTML.push({first: outerHTML[0], second: "</"+outerHTML[1]});
    // $('textarea').replaceWith("<div id='divForTA' class='divTextArea'>"+$('textarea').val().replace(/\n/g, "<br>") + "</div>");

    let curClassName = i.className.split(new RegExp("\\s"));
    let found = false;
    for (let c of curClassName) {
      for (let cl of colourClassNames) {
        if (cl == c) {
          found = true;
          colourClassToAdd.push(cl);
          break;
        }
      }
      if (found) break;
    }
    if (!found) colourClassToAdd.push("");

    found = false;
    for (let c of curClassName) {
      for (let cl of sizeClassNames) {
        if (cl == c) {
          found = true;
          sizeClassToAdd.push(cl);
          break;
        }
      }
      if (found) break;
    }
    if (!found) sizeClassToAdd.push("regular");
  }
  let count = 0;
  for (let v of variables) {
    console.log(v);
    $("#"+v).replaceWith("<div id='divForTA' class='textarea " + colourClassToAdd[count] + " " + sizeClassToAdd[count] + "' align='left' style='height: " + heights[count] + "'>"+$("#"+v).val().replace(/\n/g, "<br>") + "</div>");
    count++;
  }
  html2canvas($('#to_download')[0], {scrollY: -window.scrollY}).then((canvas)=>{
    let pdf = new jsPDF('l', 'mm', 'a3');
    let width = pdf.internal.pageSize.width;
    let height = pdf.internal.pageSize.height;

    let img = canvas.toDataURL("image/png");
    pdf.addImage(img, 'png', 0, 0, width, height);
    if (test != false) pdf.save('form.pdf');
    location.reload();
    // $('#divForTA').replaceWith(oldText);
  });
}
