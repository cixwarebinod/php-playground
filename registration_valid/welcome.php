<?php include 'auth.php' ?>

<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    gotoLogin();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Sucessfull <?php echo $_SESSION['fname'] ?>!</h1>
    <h2>Goto <a href="Login-css/login.php">Login-page</a> </h2>

    <form method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>