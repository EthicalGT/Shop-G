<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moving Submit Validation Button</title>
    <link rel="stylesheet" href="style11.css" />
  </head>
  <body>
    <div class="container">
	<label><h1>Login Form</h1></label><br>
<form action="#" method="POST">
      <input type="text" name="tb1" placeholder="Username" id="username" />
      <input type="password" name="tb2" placeholder="Password" id="password" />
      <button id="submit">Submit</button>
</form>
      <p id="message-ref">Signed Up Successfully!</p>
    </div>
    <!-- Script -->
    <script>
	let usernameRef = document.getElementById("username");
let passwordRef = document.getElementById("password");
let submitBtn = document.getElementById("submit");
let messageRef = document.getElementById("message-ref");

let isUsernameValid = () => {
  /* Username should be contain more than 3 characters. Should begin with alphabetic character  Can contain numbers */
  const usernameRegex = /^[a-zA-Z][a-zA-Z0-9]{3,32}/gi;
  return usernameRegex.test(usernameRef.value);
};

let isPasswordValid = () => {
  /* Password should be atleast 8 characters long. Should contain atleast 1 number, 1 special symbol , 1 lower case and 1 upper case */
  const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{4,}$/gm;
  return passwordRegex.test(passwordRef.value);
};

usernameRef.addEventListener("input", () => {
  if (!isUsernameValid()) {
    messageRef.style.visibility = "hidden";
    usernameRef.style.cssText =
      "border-color: #fe2e2e; background-color: #ffc2c2";
  } else {
    usernameRef.style.cssText =
      "border-color: #34bd34; background-color: #c2ffc2";
  }
});

passwordRef.addEventListener("input", () => {
  if (!isPasswordValid()) {
    messageRef.style.visibility = "hidden";
    passwordRef.style.cssText =
      "border-color: #fe2e2e; background-color: #ffc2c2";
  } else {
    passwordRef.style.cssText =
      "border-color: #34bd34; background-color: #c2ffc2";
  }
});

submitBtn.addEventListener("mouseover", () => {
  //If either password or username is invalid
  if (!isUsernameValid() || !isPasswordValid()) {
    // To get the current position of submit btn
    let containerRect = document
      .querySelector(".container")
      .getBoundingClientRect();
    let submitRect = submitBtn.getBoundingClientRect();
    let offset = submitRect.left - containerRect.left;
    console.log(offset);
    //To move the button from left to right...
    if (offset <= 100) {
      submitBtn.style.transform = "translateX(16.25em)";
    }
    //To move the button from right to left...
    else {
      submitBtn.style.transform = "translateX(0)";
    }
  }
});
submitBtn.addEventListener("click", () => {
  messageRef.style.visibility = "visible";
});
	</script>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect('localhost','root','','login');
$query=mysqli_query($conn,'select username, password from login_info');
while($r=mysqli_fetch_array($query)){
if($_POST['tb1']==$r['username'] && $_POST['tb2']==$r['password']){
echo"<script>window.location='Admin/title.html';</script>";
}
else{
echo"<script>alert('invalid password or username'); <script>";
}
}
}
?>