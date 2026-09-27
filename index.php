<?php
Class Product {
    Private $productName;
    Private $price;
    Private $quantity;

    Public function setProductName($productName) {
        $this->productName = $productName;
    }
    Public function setPrice($price) {
        $this->price = $price;
    }
    Public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    
    Public function getProductName() {
       Return $this->productName;
    }
    Public function getPrice() {
        Return $this->price;
    }
    Public function getQuantity() {
        Return $this->quantity;
    }
    Public function getTotal() {
        Return $this->price * $this->quantity;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Info</title>
</head>
<body>
<form method=”POST”>
    <label>Product Name:</label>
    <input type=”text” name=”txtProduct” placeholder=”Enter Product”><br><br>

    <label>Price:</label>
    <input type=”number” name=”txtPrice” placeholder=”Enter Price”><br><br>

    <label>Quantity:</label>
    <input type=”number” name=”txtQuantity” placeholder=”Enter Quantity”><br><br>

    <input type=”submit” name=”btnSubmit” value=”Submit”>
</form>
</body>
</html>

<?php


If(isset($_POST[‘btnSubmit’])) {
    $p1 = new Product();
    $p1->setProductName($_POST[‘txtProduct’]);
    $p1->setPrice($_POST[‘txtPrice’]);
    $p1->setQuantity($_POST[‘txtQuantity’]);

    Echo “Product: “ . $p1->getProductName() . “<br>”;
    Echo “Price: “ . $p1->getPrice() . “<br>”;
    Echo “Quantity: “ . $p1->getQuantity() . “<br>”;
    Echo “Total: “ . $p1->getTotal();
}
?>