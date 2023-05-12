var check = function () {
  if (
    document.getElementById("password").value ==
    document.getElementById("confirm_password").value
  ) {
    document.getElementById("pass").style.color = "white";
    document.getElementById("pass").innerHTML = "Matching";
  } else {
    document.getElementById("pass").style.color = "red";
    document.getElementById("pass").innerHTML = "Not matching";
  }
};

function validateForm() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var male = document.getElementById("male").value;
  var female = document.getElementById("female").value;
  if (fname == "" || lname == "" || email == "") {
    document.getElementById("message").innerHTML = "Enter all information!";
    return false;
  } else if (male == "" && female == "") {
    document.getElementById("message").innerHTML = "Enter all information!";
    return false;
  }
  return true;
}
