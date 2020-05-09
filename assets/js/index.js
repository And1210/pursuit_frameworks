let cur_user = "";

$(document).ready(() => {
  load_profile();

  document.getElementById('password').addEventListener("keyup", key_reset_password);
});

function load_profile() {
  let email = $('#email').val();

  let dataString = "id="+cur_user;

  $.ajax({
    type: 'POST',
    url: '/handlers/get_user_data_handler.php',
    data: dataString,
    success: (data) => {
      let jsonData = JSON.parse(data);
      if (jsonData.success) {
        cur_user = jsonData.id;
        $('#name').html(jsonData.fname + " " + jsonData.lname);
        $('#email').html(jsonData.email);
        let admin = jsonData.access;
        if (admin === "0") {
          $('#admin').html("You are an admin");
        } else {
          $('#admin').html('');
        }
      } else {
        alert("No user logged in!");
        window.location.href = "index.php";
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function reset_password() {
  let password = $('#password').val();
  let hash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(password));

  let dataString = "id="+cur_user;

  if (password.length > 0) {dataString += "&password="+hash;}

  $.ajax({
    type: 'POST',
    url: '/handlers/update_handler.php',
    data: dataString,
    success: (data) => {
      let jsonData = JSON.parse(data);

      if (jsonData.success == true) {
        $('#password').val('');
        alert('Password updated successfully!');
      } else {
        alert('Password update failed, please try again.');
      }
    },
    fail: (data) => {
      console.log(data);
    }
  });
}

function key_reset_password() {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    reset_password();
  }
}
