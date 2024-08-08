<?php
  $empno=$_GET["eno"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
        require "include/navbar.php";
        ?>
        <div id="mydata">
            <h1> Edit </h1>

            <?php
            $con = new mysqli("localhost", "root", "", "employees_details");
            $qry = "select *  from employees where employee_no=$empno";
            $result=$con->query($qry);
            while ($row = $result->fetch_assoc())
             {
                echo "<form method='post' action='updatesave.php'>";
                echo "<table>";
                echo "<tr>";
                echo "<td> Employee no </td>";
                echo "<td>  <input type='text' value='".$row["employee_no"]."'  name='eno'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Name </td>";
                echo "<td><input type='text' value='".$row["emp_name"]."'  name='nm'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Email</td>";
                echo "<td><input type='text' value='".$row["emp_email"]."'  name='email'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Salary </td>";
                echo "<td><input type='text' value='".$row["emp_salary"]."'  name='sal'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> </td>";
                echo "<td><input type='submit' value='update'></td>";
                echo "</tr>";
                echo "</table>";
                echo "</form>";
            }
            ?>
        </div>
        <?php
        include "include/footer.php";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>