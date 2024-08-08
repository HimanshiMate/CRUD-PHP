<?php
if (isset($_POST["submit"])) {
    $empno = $_POST["eno"];
    $ename = $_POST["nm"];
    $email = $_POST["email"];
    $salary = $_POST["sal"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
        require "include/navbar.php";
        ?>

        <div id="mydata">
            <?php
            if (isset($_POST["submit"])) {

                $con = new mysqli("localhost", "root", "", "employees_details");
                $sql = "insert into employees(employee_no,emp_name,emp_email,emp_salary) values('$empno','$ename','$email','$salary')";
                $con->query($sql);
                $con->close();

                echo "<script>";
                echo "alert('record save!!!')";
                echo "</script>";
            }
            ?>
            <h1>Insert Employee Record</h1>
            <form method="post" action="insert.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Employeeno</label>
                    <input type="text" class="form-control" name="eno" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Name</label>
                    <input type="text" class="form-control" name="nm" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Email</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter salary</label>
                    <input type="text" class="form-control" name="sal" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

        <?php
        require "include/footer.php";
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <h1>welcome to PHP CRUD operation</h1>
    <a href="index.php">HOME</a>
    <a href="insert.php">INSERT</a>
    <a href="search.php">SERACH</a>
    <a href="display.php">DISPLAY</a>
    <a href="contact.php">CONTACT</a>

    <hr size="4" color="black">
    <h1>FORM</h1>
    <form method="post" action="save.php">
        Enter Employee no. : <input type="text" name="eno"><br>
        Enter Employee name : <input type="text" name="nm"><br>
        Enter Employee email :<input type="text" name="email"><br>
        Enter Employee salary :<input type="text" name="sal"><br>
        <input type="submit" value="save">
    </form>
    <hr size="4" color="black"> -->


</body>

</html>