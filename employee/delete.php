<?php 
 $empno=$_GET["eno"];

 $con= new mysqli("localhost", "root", "", "employees_details");

 $qry="delete from employees where employee_no=$empno";

 $con->query($qry);

 $con->close();

 header("location: update.php");

?>