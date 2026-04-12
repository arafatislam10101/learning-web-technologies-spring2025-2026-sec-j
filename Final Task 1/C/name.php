<?php
$name = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="submit">
</form>

<?php
if($name!=""){
    echo "Name: " . $name;
}
?>