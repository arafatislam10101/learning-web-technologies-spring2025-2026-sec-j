<?php include('config.php'); ?>

<?php
if(isset($_POST['submit'])){
    $_SESSION['user'] = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "picture" => ""
    ];
    echo "Registration Successful!";
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Register">
</form>