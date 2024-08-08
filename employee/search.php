<?php
if(isset($_POST["submit"]))   #Error na mile or data show ho
{
 $empno = $_POST["eno"];
}
?>

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
            <h1>Search Employee Record</h1>
            <form method="post" action="search.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Employee no</label>
                    <input type="text" class="form-control" name="eno" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

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
                if (isset($_POST["submit"])){
                  $con= new mysqli("localhost", "root","","employees_details");
                  $qry= "select * from employees where employee_no=$empno";
                  $result=$con->query($qry);
                  while($row=$result->fetch_assoc())
                  {
                   echo "<tr>";
                        echo "<td>".$row["employee_no"]."</td>";   #database col name
                        echo "<td>".$row["emp_name"]."</td>";
                        echo "<td>".$row["emp_email"]."</td>";
                        echo "<td>".$row["emp_salary"]."</td>";
                       echo "</tr>";
                  }
                }   
                ?>
            </tbody>
        </table>

        <?php
        require "include/footer.php";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>