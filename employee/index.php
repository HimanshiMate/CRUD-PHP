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
        <h1>Welcome to Home page</h1>
    </div>

    <?php
    require "include/footer.php";
    ?>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <h1>welcome to PHP CRUD operation</h1>
    <a href="index.php">HOME</a>
    <a href="insert.php">INSERT</a>
    <a href="display.php">DISPLAY</a>
    <a href="search.php">SEARCH</a>
    <a href="contact.php">CONTACT</a> 

    <hr size="4" color="black">
    <h1>welcome to home page</h1>
    <hr size="4" color="black"> -->
    
</body>

</html>