function save_pdf(test) {
  // var textarea = document.getElementById("target");
  // textarea.style.height = textarea.scrollHeight + "px";
  // html2canvas(textarea, {
  //   onrendered: function(canvas) {
  //     document.body.appendChild(canvas);
  //     textarea.style.height = "";
  //   },
  //   width: 320,
  //   height: textarea.offsetHeight
  // });

  let oldValues = [];
  let oldOuterHTML = []
  for (let i of $('textarea')) {
    oldValues.push(i.value);
    let outerHTML = i.outerHTML.split("</");
    oldOuterHTML.push({first: outerHTML[0], second: "</"+outerHTML[1]});
    // $('textarea').replaceWith("<div id='divForTA' class='divTextArea'>"+$('textarea').val().replace(/\n/g, "<br>") + "</div>");

    console.log(i.className.split(new RegExp("\\s")));
  }
  for (let v of variables) {
    $("#"+v).replaceWith("<div id='divForTA' class='divTextArea' align='left'>"+$("#"+v).val().replace(/\n/g, "<br>") + "</div>");
  }
  html2canvas($('#to_download')[0], {scrollY: -window.scrollY}).then((canvas)=>{
    let pdf = new jsPDF('l', 'mm', 'a3');
    let width = pdf.internal.pageSize.width;
    let height = pdf.internal.pageSize.height;

    let img = canvas.toDataURL("image/png");
    pdf.addImage(img, 'png', 0, 0, width, height);
    if (test != false) pdf.save('form.pdf');
    // location.reload();
    // $('#divForTA').replaceWith(oldText);
  });
}
