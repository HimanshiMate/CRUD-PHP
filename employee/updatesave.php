<?php 
 $empno=$_POST["eno"];
 $ename=$_POST["nm"];
 $email=$_POST["email"];
 $salary=$_POST["sal"];
 $con= new mysqli("localhost", "root", "", "employees_details");
 $sql="update employees set emp_name='$ename', emp_email='$email',emp_salary ='$salary' where employee_no='$empno'";
 $con->query($sql);
 $con->close();
 header("location: update.php?update=yes");
?>
