function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
  
    if (name === "" || email === "" || phone === "") {
      alert("Please fill in all fields");
      return false;
    }
  
    return true;
  }
  