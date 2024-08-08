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
    <h1> Display Employee Data</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">employee no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
    <!-- <h1>welcome to PHP CRUD operation</h1>
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
        </tr>  -->
       <tbody>
        <?php
        $con = new mysqli("localhost", "root", "", "employees_details");
        $sql = "select * from employees";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["employee_no"]."</td>";   #database column name 
            echo "<td>".$row["emp_name"]."</td>";
            echo "<td>".$row["emp_email"]."</td>";
            echo "<td>".$row["emp_salary"]."</td>";
            echo "</tr>";
        }
        $con->close();
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