$(document).ready(() => {
  $('#register').click(() => {
    register();
  });

  document.getElementById('email').addEventListener("keyup", key_register);
  document.getElementById('password').addEventListener("keyup", key_register);
});

function register() {
  let fname = $('#fname').val();
  let lname = $('#lname').val();
  let email = $('#email').val();
  let password = $('#password').val();

  let hash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(password));

  let dataString = "fname="+fname+"&lname="+lname+"&email="+email+"&password="+hash;
  // console.log(dataString);

  $.ajax({
    type: 'POST',
    url: '/handlers/register_handler.php',
    data: dataString,
    success: (data) => {
      let jsonData = JSON.parse(data);
      $("#result").html(jsonData.msg);
      alert(jsonData.msg);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function key_register(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    register();
  }
}
