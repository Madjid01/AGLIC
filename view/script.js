
    


function show_password(){

    var x= document.getElementById("input");

    if (x.type == "password") {
        x.type = "text";
    }
    else{
        x.type ="password";
    }

}

function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("input").value;
  
    if (username == "" || password == "") {
      alert("Please enter both username and password.");
      return false;
    }
  }


  function verify_pass(){
//alert("this javascript code is working !");

    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirm-password").value;
    
    

    if (pass1 != pass2) {

        alert("password incorrect");
        
    }





  }


  function validatePassword() {

   

    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm-password");
    const passwordError = document.getElementById("password-error");
  
    if (passwordInput.value != confirmPasswordInput.value) {
      passwordError.style.display = "block";
      confirmPasswordInput.setCustomValidity("Passwords do not match.");
    } else {
      passwordError.style.display = "none";
      confirmPasswordInput.setCustomValidity("");
      // submit form if passwords match
      document.forms[0].submit();
    }
  }