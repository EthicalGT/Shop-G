
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
     $query="select image from student where sid='7'";
    $result=mysqli_query($connection,$query);
    if($result)
      {
        
while($r=mysqli_fetch_array($result)){
echo "<img src='<?php echo $r['image']; ?>'>";
}
}
?>