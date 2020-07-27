let variables = ['describe_her', 'see_her', 'loved_her', 'impact_her', 'tension', 'assumed_role', 'true_role', 'describe_him', 'see_him', 'loved_him', 'impact_him'];
let siteName = "MyRelationshipToAuthority";

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

  let dataString = "form=authority&";
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
    data: 'form=authority',
    success: (data) => {
      if (data == false) {
        console.log("No data to load");
        return;
      }

      let json = JSON.parse(data);
      for (let v of variables) {
        $('#'+v).val(json[v]);
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}
