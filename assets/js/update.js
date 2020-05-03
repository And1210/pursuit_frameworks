let cur_user = "";

$(document).ready(() => {
  $('#get_data').click(() => {
    get_user();
  });
  document.getElementById('get_user').addEventListener("keyup", key_get_user);

  $('#update').click(() => {
    update();
  });

  document.getElementById('email').addEventListener("keyup", key_update);
  document.getElementById('password').addEventListener("keyup", key_update);
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

function update() {
  if (cur_user == "") {
      alert("Please select a user first");
      return;
  }

  let fname = $('#fname').val();
  let lname = $('#lname').val();
  let email = $('#email').val();
  let password = $('#password').val();

  let hash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(password));

  let dataString = "id=" + cur_user;
  if (fname.length > 0) {dataString += "&fname="+fname;}
  if (lname.length > 0) {dataString += "&lname="+lname;}
  if (email.length > 0) {dataString += "&email="+email;}
  if (password.length > 0) {dataString += "&password="+hash;}

  $.ajax({
    type: 'POST',
    url: '/handlers/update_handler.php',
    data: dataString,
    success: (data) => {
      console.log(data);
      // let jsonData = JSON.parse(data);
      // $("#result").html(jsonData.msg);
      // alert(jsonData.msg);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function key_update(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    update();
  }
}
