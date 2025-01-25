<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moving Submit Validation Button</title>
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
    <div class="container">
	<label><h1>Login Form</h1></label><br>
      <form action="#" method="POST">
      <input type="text" name="tb1" placeholder="Username" id="username" />
      <input type="password" name="tb2" placeholder="Password" id="password" />
      <input type="submit" name="submit" value="Login" id="submit">
</form>
</div>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
$username=$_POST['tb1'];
$pwd=$_POST['tb2'];
$conn=mysqli_connect('localhost','root','','login');
$query="select username,password from login_info";
$result=mysqli_query($conn,$query);
while($r=mysqli_fetch_array($result)){
if($username==$r['username'] && $pwd==$r['password']){
header("Admin/index.html");
}
else{
echo"<script>alert('invalid password or username');<script>";
}
}
}
?>