<?php
session_start(); //initialize before displaying html
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is home page<br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>

<?php
echo "Username: " . $_SESSION["userN"] . "<br>";
echo "Password: " . $_SESSION["pass"] . "<br>";

if (isset($_POST["logout"])) {
    session_destroy(); //end session
    header("Location: index.php");
}
