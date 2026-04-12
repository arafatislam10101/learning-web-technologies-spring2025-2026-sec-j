<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    echo "Name: " . $name;
}
?>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>