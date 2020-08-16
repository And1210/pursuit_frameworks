$(document).ready(() => {
  $('#login').click(() => {
    login();
  });

  document.getElementById('email').addEventListener("keyup", key_login);
  document.getElementById('password').addEventListener("keyup", key_login);
});

function login() {
  let email = $('#email').val();
  let password = $('#password').val();

  let hash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(password));

  let dataString = "email="+email+"&password="+hash;
  // console.log(dataString);

  $.ajax({
    type: 'POST',
    url: '/handlers/login_handler.php',
    data: dataString,
    success: (data) => {
      let jsonData = JSON.parse(data);
      if (jsonData.success === true) {
        window.location.href="index.php";
      } else {
        alert(jsonData.msg);
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function key_login(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    login();
  }
}
