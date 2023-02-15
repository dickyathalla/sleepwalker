function validate() {
  var username = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  if (username == "dickyathallah@gmail.com" && password == "123456789") {
    location.href = "index.html";
    return true;
  } else if (username == "") {
    document.getElementById("message").innerHTML = "Username harus diisi";
    return false;
  } else if (password == "") {
    document.getElementById("message").innerHTML = "Password harus diisi";
    return false;
  } else if (username == "" && password == "") {
    return false; // Redirecting to other page.
  } else {
    document.getElementById("message").innerHTML = "Username atau Password anda salah";
    return false;
  }
}
