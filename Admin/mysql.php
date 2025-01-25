
<?php
$email=$_POST['t1'];
$pwd=$_POST['t2'];
$connection=mysqli_connect("localhost","root","","student");
if($connection)
{
  echo"connection established..!";
 }
  else
    {
      echo"connection failed..!";
   }
     $query="select sid,sname,email,password,dob from student where email='$email' and  password='$pwd'";
    $result=mysqli_query($connection,$query);
    if($result)
      {
          echo"<html>
<head>
<link rel='stylesheet' href='style.css'>
</head>
<table border='1'>
   <tr>     <th> student id</th>
         <th> student name</th>
          <th> email </th>
          <th> password</th>
           <th> dob </th>
                         </tr>";
      while($r=mysqli_fetch_array($result)){
      echo"<tr><td>".$r['sid']."</td>";
       echo"<td>".$r['sname']."</td>";
       echo"<td>".$r['email']."</td>";
        echo"<td>".$r['password']."</td>";
        echo"<td>".$r['dob']."</td></tr></table>";
}
}
mysqli_close($connection);
?>



      

                                  
                   
                 