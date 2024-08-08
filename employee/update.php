<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1>Update</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Employee no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $con = new mysqli("localhost", "root", "", "employees_details");
                    $qry = "select * from employees";
                    $result = $con->query($qry);
                    while ($row = $result->fetch_assoc())
                     {
                        echo "<tr>";
                        echo "<td>" . $row["employee_no"] . "</td>";   #database col name
                        echo "<td>" . $row["emp_name"] . "</td>";
                        echo "<td>" . $row["emp_email"] . "</td>";
                        echo "<td>" . $row["emp_salary"] . "</td>";
                        echo "<td>
                                <a href='edit.php?eno=".$row["employee_no"]."'>       
                                <img src='images/edit.png' width='20' height='20'>
                                </a>

                                <a href='delete.php?eno=".$row["employee_no"]."'>
                                <img src='images/delete.png' width='20' height='20' >
                                </a>
                                </td>";
                        echo "</tr>";
                    }
                    $con->close();
                    ?>
                </tbody>
            </table>
        </div>

        <?php
        if (isset($_GET["update"])) {
            echo "<script>";
            echo "alert('Data succesfully updated!!!')";
            echo "</script>";
        }
        ?>

        <?php
        require "include/footer.php";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>