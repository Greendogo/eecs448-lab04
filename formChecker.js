function validate() {
  var username = document.getElementById("username").value;
  alert(username);
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
    if (sofa < 0 || tomato < 0 || pencil < 0) {
      alert("Please enter values 0 or above!");
      return false;
    }
    else {
      document.getElementById("shoppingForm").submit();
      return true;
    }
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
  document.getElementsByName("username").value = "";
  document.getElementsByName("password").value = "";
  document.getElementsByName("sofa").value = 0;
  document.getElementsByName("tomato").value = 0;
  document.getElementsByName("pencil").value = 0;
  document.getElementsByName("shipping").value = 1;
}
