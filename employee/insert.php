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
    <h1>FORM</h1>
    <form method="post" action="save.php">
        Enter Employee no. : <input type="text" name="eno"><br>
        Enter Employee name : <input type="text" name="nm"><br>
        Enter Employee email :<input type="text" name="email"><br>
        Enter Employee salary :<input type="text" name="sal"><br>
        <input type="submit" value="save">
    </form>
    <hr size="4" color="black">


</body>
</html>