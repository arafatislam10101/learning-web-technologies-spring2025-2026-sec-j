<?php include('config.php'); ?>

<?php
if(!isset($_SESSION['loggedin'])){
    header("Location: C_login.php");
}
?>

<h2>Dashboard</h2>

<a href="F_view.php">View Profile</a><br>
<a href="G_edit.php">Edit Profile</a><br>
<a href="H_picture.php">Change Picture</a><br>
<a href="I_password.php">Change Password</a><br>
<a href="logout.php">Logout</a>