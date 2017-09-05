<?php
header("Content-Type: application/json; charset=UTF-8");
$obj1 = json_decode($_POST["username"], false);
$obj2 = json_decode($_POST["password"], false);

$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
$result = $conn->query("SELECT * FROM "users"  WHERE email='$obj1' ");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>
