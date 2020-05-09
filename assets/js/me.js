let variables = ['title', 'description', 'meaningfulness_you', 'meaningfulness_other', 'impact_you', 'impact_other'];

$(document).ready(() => {
  $('#save').click(() => {
    save();
  });

  load();
});

function save() {
  let inputs = [];
  let input_data = [];
  for (let i = 1; i <= 3; i++) {
    for (let v of variables) {
      inputs.push(v+(""+i));
    }
  }
  inputs.push("fundamental");

  for (let i of inputs) {
    let a = '#'+i;
    input_data.push($(a).val());
  }

  let dataString = "form=me&";
  for (let i in inputs) {
    let end = i >= inputs.length-1 ? '' : '&';
    let data = input_data[i]==undefined ? '' : input_data[i];
    dataString += inputs[i]+"="+data+end;
  }

  $.ajax({
    type: 'POST',
    url: '/handlers/form_submit_handler.php',
    data: dataString,
    success: (data) => {
      alert(data);
      // console.log(data);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function load() {
  $.ajax({
    type: 'POST',
    url: '/handlers/form_request_handler.php',
    data: 'form=me',
    success: (data) => {
      let json = JSON.parse(data);
      for (let i = 1; i <= 3; i++) {
        for (let variable of variables) {
          let v = variable+i;
          $('#'+v).val(json[v]);
        }
      }
      $('#fundamental').val(json["fundamental"]);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}
