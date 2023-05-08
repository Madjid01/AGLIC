function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username == "" || password == "") {
      alert("Please enter both username and password.");
      return false;
    }
  }
  
  function show_password(){

      var x = document.getElementById("input");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }


    function test(){
      alert("this js code is working !");
    }