let variables = ['phase1_label', 'phase1_comm_me', 'phase1_comm_others', 'phase1_actions', 'phase1_completions', 'phase2_label', 'phase2_comm_me', 'phase2_comm_others', 'phase2_actions', 'phase2_completions', 'phase3_label', 'phase3_comm_me', 'phase3_comm_others', 'phase3_actions', 'phase3_completions', 'phase4_label', 'phase4_comm_me', 'phase4_comm_others', 'phase4_actions', 'phase4_completions', 'phase5_label', 'phase5_comm_me', 'phase5_comm_others', 'phase5_actions', 'phase5_completions', 'finished', 'lives'];
let siteName = "MyNaturalApproach";

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

  let dataString = "form=natural_approach&";
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
    data: 'form=natural_approach',
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
