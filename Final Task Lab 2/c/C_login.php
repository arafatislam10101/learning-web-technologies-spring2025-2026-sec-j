<?php include('config.php'); ?>

<?php
if(isset($_POST['login'])){
    if($_POST['email'] == $_SESSION['user']['email'] &&
       $_POST['password'] == $_SESSION['user']['password']){

        $_SESSION['loggedin'] = true;

        // Cookie example
        setcookie("user_email", $_POST['email'], time()+3600);

        header("Location: E_dashboard.php");
    } else {
        echo "Invalid Login!";
    }
}
?>

<form method="post">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
</form>