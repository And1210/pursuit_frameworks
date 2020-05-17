let variables = ['feel_neg', 'big_world_neg', 'big_world_pos', 'world_communities_neg', 'world_communities_pos', 'feel_pos', 'react_neg', 'work_world_neg', 'work_world_pos', 'respond_pos', 'impact_neg', 'personal_world_neg', 'personal_world_pos', 'impact_pos', 'position_neg', 'position_pos', 'thoughts'];

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

  let dataString = "form=world_view&";
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
      console.log(data);
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
    data: 'form=world_view',
    success: (data) => {
      if (data == false) {
        console.log("No data to load");
        return;
      }

      let json = JSON.parse(data);
      for (let v of variables) {
        if (v == "impact_neg" || v == "impact_pos") {
          if (json[v] == '') {
            $('#'+v).val("Me: \nOthers: \nWorld: ");
          }
        } else {
          $('#'+v).val(json[v]);
        }
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}
