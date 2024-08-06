<?php
$empno = $_POST["eno"];
$ename = $_POST["nm"];
$email = $_POST["email"];
$salary = $_POST["sal"];

$con = new mysqli("localhost", "root", "", "employees_details");
$qry = "insert into employees(employee_no,emp_name,emp_email,emp_salary) values('$empno','$ename','$email','$salary')";
$con->query($qry);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  <h1>welcome to PHP CRUD operation</h1>
  <a href="index.php">HOME</a>
  <a href="insert.php">INSERT</a>
  <a href="search.php">SERACH</a>
  <a href="display.php">DISPLAY</a>
  <a href="contact.php">CONTACT</a>

  <hr size="4" color="black">
  <h1>Data save successfully...</h1>
  <hr size="4" color="black">


</body>

</html>