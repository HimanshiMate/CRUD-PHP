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
    <a href="display.php">DISPLAY</a>
    <a href="search.php">SEARCH</a>
    <a href="contact.php">CONTACT</a>

    <hr size="4" color="black">
    <h1>Display employee record </h1>
    <hr size="4" color="black">
    <table>
        <tr>
            <th>Employee no</th>
            <th>Employee name</th>
            <th>Employee email</th>
            <th>Employee salary</th>
        </tr>

        <?php
        $con = new mysqli("localhost", "root", "", "employees_details");
        $qry = "select * from employees";
        $result = $con->query($qry);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["employee_no"]."</td>";   #database column name
            echo "<td>".$row["emp_name"]."</td>";
            echo "<td>".$row["emp_email"]."</td>";
            echo "<td>".$row["emp_salary"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>



</body>

</html>