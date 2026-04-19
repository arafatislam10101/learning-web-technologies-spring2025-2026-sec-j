<?php include('config.php'); ?>

<?php
if(isset($_POST['change'])){
    if($_POST['old'] == $_SESSION['user']['password']){
        $_SESSION['user']['password'] = $_POST['new'];
        echo "Password Changed!";
    } else {
        echo "Wrong Old Password!";
    }
}
?>

<form method="post">
    Old Password: <input type="password" name="old"><br>
    New Password: <input type="password" name="new"><br>
    <input type="submit" name="change" value="Change">
</form>