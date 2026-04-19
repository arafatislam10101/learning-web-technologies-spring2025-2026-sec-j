<?php include('config.php'); ?>

<?php
if(isset($_POST['reset'])){
    if($_POST['email'] == $_SESSION['user']['email']){
        $_SESSION['user']['password'] = "1234";
        echo "Password reset to: 1234";
    } else {
        echo "Email not found!";
    }
}
?>

<form method="post">
    Enter Email: <input type="email" name="email"><br>
    <input type="submit" name="reset" value="Reset Password">
</form>