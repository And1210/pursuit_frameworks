let pdf = new jsPDF();

let specialElementHandlers = {
    '#elementH': function (element, renderer) {
        return true;
    }
};

function save_pdf() {
  let body = $('#to_download').html();
  console.log(body);

  pdf.fromHTML(body, 15, 15, {
    width: 170,
    elementHandlers: specialElementHandlers
  });
  pdf.save('form.pdf');
}
