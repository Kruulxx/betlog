<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var cpassInput = document.getElementById("cpassword");
  
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
  
  if (cpassInput.type === "cpassword") {
    cpassInput.type = "text";
  } else {
    cpassInput.type = "cpassword";
  }
}
  </script>

<input type="checkbox" onclick="togglePasswordVisibility()"> Show password</input>
                    <br>