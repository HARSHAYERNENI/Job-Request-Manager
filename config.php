<?php

$server='localhost';
$username='root';
$password='';
$database='job';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
  die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];

  $sql = " INSERT INTO `users`( `name`, `email`, `password`, `phone_no`)  VALUES ('$name', '$email', '$password', '$number')";
  if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
  }else{
    echo "ERROR: Could not able to execute $sql." .mysqli_error($conn);
  }
}

session_start();
if(isset($_POST['Login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=" SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  if(mysqli_num_rows($result)==1){
    header("location:index.php");
  }else{
    $error = "Incorrect email or password.";
  }
}

if(isset($_POST['jobs'])){
  $cname=$_POST['cname'];
  $position=$_POST['position'];
  $jdesc=$_POST['jdesc'];
  $skills=$_POST['skills'];
  $CTC=$_POST['CTC'];

  $sql = "INSERT INTO `jobs`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname', '$position', '$jdesc', '$skills', '$CTC')";
  if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
  }else{
    echo "ERROR: Could not able to execute $sql1." .mysqli_error($conn);
  }
}

if(isset($_POST['applyfor'])){
  $name=$_POST['name'];
  $apply=$_POST['apply'];
  $qual=$_POST['qual'];
  $year=$_POST['year'];


  $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
  if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
  }else{
    echo "ERROR: Could not able to execute $sql." .mysqli_error($conn);
  }
}

// mysqli_close($conn);
 ?>
