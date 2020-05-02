$(document).ready(() => {
  $('#login').click(() => {
    login();
  });
});

function login() {
  let username = $('#username').val();
  let password = $('#password').val();

  let hash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash("testpass"));

  let dataString = "username="+username+"&password="+hash;

  $.ajax({
    type: 'POST',
    url: '/modules/login.php',
    data: dataString,
    success: (data) => {
      $('#test').html(data);
    },
    fail: (data) => {
      console.log(data);
    }
  });
}
