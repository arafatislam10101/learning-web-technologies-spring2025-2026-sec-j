<?php include('config.php'); ?>

<h2>Profile</h2>

Name: <?php echo $_SESSION['user']['name']; ?><br>
Email: <?php echo $_SESSION['user']['email']; ?><br>

<?php
if($_SESSION['user']['picture']){
    echo "<img src='".$_SESSION['user']['picture']."' width='100'>";
}
?>