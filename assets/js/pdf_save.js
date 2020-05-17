function save_pdf() {
  // let pdf = new jsPDF('p', 'pt', 'letter');
  //
  // pdf.addHTML($('#to_download')[0], () => {
  //   console.log("done");
  //   pdf.save('form.pdf');
  // });

  html2canvas($('#to_download')[0], {scrollY: -window.scrollY}).then((canvas)=>{
      let pdf = new jsPDF('l', 'mm', 'a3');
      let img = canvas.toDataURL("image/png");
      pdf.addImage(img, 'png', 0, 0);
      pdf.save('form.pdf');
  });
}
