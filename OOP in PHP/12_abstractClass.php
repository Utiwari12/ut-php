<?php
abstract class ProductFeatures {
    abstract function productDetails();
    abstract function productPrice();
    abstract function productImage();
    abstract function productOwnerDetails();

    function commonFeatures() {
        echo "Common Features in Product: ";
    }
}

class UploadProduct extends ProductFeatures {
    function productDetails() {
        echo "Product Name: ";
    }
    function productPrice() {
        echo "Product Price: ";
    }
    function productImage() {
        echo "Product Image: ";
    }
    function productOwnerDetails() {
        echo "Product Owner Details: ";
    }
}

$upload = new UploadProduct();
echo "<br>";
$upload->productDetails();
echo "<br>";
$upload->productPrice();
echo "<br>";
$upload->productImage();
echo "<br>";
$upload->productOwnerDetails();
echo "<br>";
$upload->commonFeatures();
?>