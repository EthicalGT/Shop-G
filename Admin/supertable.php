<?php
$username=$_POST['t1'];
$pwd=$_POST['t2'];
$connection=mysqli_connect("localhost","root","","student");
if($connection)
{
  echo"<script>alert('connection established..!')</script>";
 }
  else
    {
      echo"<script>alert('connection failed..!')</script>";
   }
     $query="select image,sid,sname,username,password,contact_no from student where username='$username' and  password='$pwd'";
    $result=mysqli_query($connection,$query);
    if($result)
      {
          echo"<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Table</title>
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
      
</style>

<body>

    <h1>Student Details</h1>
    <hr>

    <table>
        <tr id='header'>
            <th>Student Profile</th>
            <th>Student Id</th>
            <th>Student name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Contact No</th>
        </tr>";
while($r=mysqli_fetch_array($result)){
echo"<tr><td>".$r['image']."</td>
<td>".$r['sid']."</td>
<td>".$r['sname']."</td>
<td>".$r['username']."</td>
<td>".$r['password']."</td>
<td>".$r['contact_no']."</td></tr></table>

</body>

</html>";
}
}
?>