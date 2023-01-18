<?php
session_start();

if (isset($_POST["submit"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $_SESSION['login'] = false;
        $error = '- All Feild Are Required';
    }else{
        if($_POST["username"] == $_POST["password"] && $_POST["password"] == "admin"){
            $_SESSION['login'] = true;
            header('location:view/home.php');
            die();
        }else{
            $error = '- Password Or Username Not Correct Try(Admin, Admin)';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta hme="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1><pre>
    <form  method="post">
        UserName : <input type="text" name="username" >

        Password : <input type="password" name="password">

        <button type="submit" name="submit">Login</button>
    </form>

    <?php echo (isset($error) ? $error : '')?>
</pre>
</body>
</html>