<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Use session to sign in</h2>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="userN"><br>
        <label>Password</label>
        <input type="password" name="pass"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    if (!empty($_POST["userN"]) && !empty($_POST["pass"])) {
        $_SESSION["userN"] = $_POST["userN"];
        $_SESSION["pass"] = $_POST["pass"];

        header("Location: home.php"); //redirect
    } else {
        echo "Requires username and password<br>";
    }
}
?>