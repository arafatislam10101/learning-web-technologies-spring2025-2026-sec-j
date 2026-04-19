<?php include('config.php'); ?>

<?php
if(isset($_POST['update'])){
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['email'] = $_POST['email'];
    echo "Updated!";
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>