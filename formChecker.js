function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var sofa = document.getElementById("sofa").value;
  var tomato = document.getElementById("tomato").value;
  var pencil = document.getElementById("pencil").value;
  var shipping = document.getElementsByName("shipping").value;
  if(!validEmail(username)) {
    alert("Please enter a valid email!");
    return false;
  }
  else if (sofa == '' || tomato == '' || pencil == '') {
    alert("Please enter values 0 or above!");
  }
  else if (sofa < 0 || tomato < 0 || pencil < 0) {
    alert("Please enter values 0 or above!");
    return false;
  }
  else if (password == '') {
    alert("Please enter a password!");
    return false;
  }
  else {
    document.getElementById("shoppingForm").submit();
    return true;
  }
}

// Got the regular expression for validating email addresses from here:
// http://www.w3resource.com/javascript/form/email-validation.php


function validEmail(text)
{
  if(text.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    return true;
  }
  else
  {
    return false;
  }
}

function resetForm() {
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";
  document.getElementById("sofa").value = 0;
  document.getElementById("tomato").value = 0;
  document.getElementById("pencil").value = 0;
  document.getElementsByName("shipping").value = 1;
}
