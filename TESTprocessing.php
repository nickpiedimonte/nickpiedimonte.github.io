<?php

// phpinfo();
include_once("includes.php");


if (isset($_POST['submit_car'])) {
$VIN = $_POST['VIN'];
$brand = $_POST['Brand'];
$model = $_POST['Model'];
$price = $_POST['Price'];
$production_year = $_POST['ProductionYear'];
// echo "The year is $production_year";
// echo "TEST: The price is $Price";
// echo "submitting a car";
$sql = "INSERT INTO car(VIN, Brand, Model, Price, ProductionYear)
VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$VIN, $brand, $model, $price, $production_year]);
}

echo "<br>";
echo "You entered a new car: <br>";
echo "VIN: $VIN <br>";
echo "Make: $brand <br>";
echo "Model: $model <br>";
echo "Price: $price <br>";
echo "Year: $production_year <br>";

echo "<br><br>";
?>

<a href= "inventory.php"> Inventory </a> 