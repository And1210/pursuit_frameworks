const colourClassNames = ["black", "blue", "light-blue", "purple", "red", "green", "yellow", "grey", "pink", "orange", "burnt-red", "no-border", "encase-black", "encase-blue", "encase-light-blue", "encase-purple", "encase-red", "encase-green", "encase-yellow", "encase-grey", "encase-pink", "encase-orange", "encase-burnt-red"];
const sizeClassNames = ["small-input", "medium-input", "medium1-input", "medium2-input", "large-input"];
const inputClassNames = ["title-border"];

function expandTextArea(jq_in){
    jq_in.each(function(index, elem){
        // This line will work with pure Javascript (taken from NicB's answer):
        elem.style.height = elem.scrollHeight+3+'px';
    });
}

function save_pdf(test) {
  //Save data
  save();
  alert("Creating pdf now... A download should pop up soon");
  //Add time
  let date = new Date();
  $('#datetime')[0].innerHTML = date.toLocaleString();
  //Add whitespace to top
  $("#to_download").css("padding-top", "50px");
  //Add logo and copyright to bottom
  $(".logoAndCopyright").clone().appendTo($(".logoCopyrightClone")[0]);

  let oldValues = [];
  let oldOuterHTML = []
  let colourClassToAdd = [];
  let sizeClassToAdd = [];
  let inputClassToAdd = [];
  let heights = [];
  let widths = [];
  for (let v of variables) {
    let i = $("#"+v)[0];
    expandTextArea($("#"+v));
    oldValues.push(i.value);
    let outerHTML = i.outerHTML.split("</");
    let height = i.offsetHeight;
    let width = i.offsetWidth;
    heights.push(height);
    widths.push(width);
    oldOuterHTML.push({first: outerHTML[0], second: "</"+outerHTML[1]});
    // $('textarea').replaceWith("<div id='divForTA' class='divTextArea'>"+$('textarea').val().replace(/\n/g, "<br>") + "</div>");

    //Change all textareas and inputs to divs
    let curClassName = i.className.split(new RegExp("\\s"));
    let found = false;
    let isInput = false;
    for (let c of curClassName) {
      if (c == "input") {
        isInput = true;
        break;
      }
    }

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
      for (let cl of inputClassNames) {
        if (cl == c) {
          found = true;
          sizeClassToAdd.push(cl);
          break;
        }
      }
      if (found) break;
    }
    if (!found && !isInput) sizeClassToAdd.push("regular");
    inputClassToAdd.push(isInput ? "input" : "");
  }

  let count = 0;
  for (let v of variables) {
    let setClass = "textarea";
    if (inputClassToAdd[count] == "input") setClass = "input";
    $("#"+v).replaceWith("<div id='divForTA' class='" + setClass + " " + colourClassToAdd[count] + " " + sizeClassToAdd[count] + "' align='left' style='height: " + heights[count] + "px; width: " + widths[count] + "px;'>"+$("#"+v).val().replace(/\n/g, "<br>") + "</div>");
    count++;
  }
  html2canvas($('#to_download')[0], {scrollY: -window.scrollY}).then((canvas)=>{
    let pdf = new jsPDF('l', 'px', [canvas.width, canvas.height]);
    let width = pdf.internal.pageSize.width;
    let height = pdf.internal.pageSize.height;

    let img = canvas.toDataURL("image/png");
    pdf.addImage(img, 'png', 0, 0, width, height);

    $.post("/handlers/get_current_user.php", (data, status) => {
      let json = JSON.parse(data);
      if (test != false) pdf.save(siteName + '-' + json.fname + json.lname + '.pdf');
      location.reload();
    });
  });
}
