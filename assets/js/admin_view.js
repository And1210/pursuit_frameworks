let cur_user = "";

$(document).ready(() => {
  $('#get_data').click(() => {
    get_user();
  });
  document.getElementById('get_user').addEventListener("keyup", key_get_user);

  $('#world_view').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="world_view.php?id="+cur_user;
  });

  $('#purpose').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="purpose.php?id="+cur_user;
  });

  $('#me').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="me.php?id="+cur_user;
  });

  $('#lighthouse').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="lighthouse.php?id="+cur_user;
  });


  $('#authority').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="authority.php?id="+cur_user;
  });


  $('#authentic_role').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="authentic_role.php?id="+cur_user;
  });


  $('#natural_approach').click(() => {
    if (cur_user == "") {
      alert('Please select a user before clicking');
      return;
    }
    window.top.location.href="natural_approach.php?id="+cur_user;
  });
});

function get_user() {
  let email = $('#get_user').val();

  let dataString = "email="+email;

  $.ajax({
    type: 'POST',
    url: '/handlers/get_user_data_handler.php',
    data: dataString,
    success: (data) => {
      let jsonData = JSON.parse(data);
      alert(jsonData.msg);
      if (jsonData.success) {
        cur_user = jsonData.id;
        $('#fname').val(jsonData.fname);
        $('#lname').val(jsonData.lname);
        $('#email').val(jsonData.email);
        $('#password').val('');
      } else {
        $('#fname').val('');
        $('#lname').val('');
        $('#email').val('');
        $('#password').val('');
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function key_get_user(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    get_user();
  }
}
