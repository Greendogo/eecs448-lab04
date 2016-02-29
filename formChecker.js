function validate() {
  var username = document.getElementsByName("username").value;
  var password = document.getElementsByName("password").value;
  var sofa = document.getElementsByName("sofa").value;
  var tomato = document.getElementsByName("tomato").value;
  var pencil = document.getElementsByName("pencil").value;
  var shipping = document.getElementsByName("shipping").value;

  if(validateEmail(username)) {
    alert("Please enter a valid email!");
  }
  else if (sofa < 0 && tomato < 0 && pencil < 0) {
    alert("Please enter values 0 or above!");
  }
  else {
    document.getElementById("shopping").submit();
  }
}

// Got the regular expression for validating email addresses from here:
// http://www.w3resource.com/javascript/form/email-validation.php


function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

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
  document.getElementsByName("username").value = "";
  document.getElementsByName("password").value = "";
  document.getElementsByName("sofa").value = 0;
  document.getElementsByName("tomato").value = 0;
  document.getElementsByName("pencil").value = 0;
  document.getElementsByName("shipping").value = 1;
}
