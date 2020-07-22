let variables = ['title1', 'description1', 'meaningfulness_you1', 'meaningfulness_other1', 'impact_you1', 'impact_other1', 'title2', 'description2', 'meaningfulness_you2', 'meaningfulness_other2', 'impact_you2', 'impact_other2', 'title3', 'description3', 'meaningfulness_you3', 'meaningfulness_other3', 'impact_you3', 'impact_other3', 'fundamental'];

$(document).ready(() => {
  $('#save').click(() => {
    save();
  });

  load();
});

function save() {
  let inputs = [];
  let input_data = [];
  for (let v of variables) {
    inputs.push(v);
  }

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
      for (let variable of variables) {
        let v = variable;
        $('#'+v).val(json[v]);
      }
      $('#fundamental').val(json["fundamental"]);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}
