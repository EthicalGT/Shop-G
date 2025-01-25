
<?php
$connection=mysqli_connect("localhost","root","","student");
if($connection)
{
  echo"<script>alert('connection established..!')</script>";
 }
  else
    {
      echo"<script>alert('connection failed..!')</script>";
   }
     $query="select images from student where username='Shruti1234' and password='Shruti@20044';
    $result=mysqli_query($connection,$query);
    if($result)
      {
        
while($r=mysqli_fetch_array($result)){
echo $_POST['images'];
}
}
?>