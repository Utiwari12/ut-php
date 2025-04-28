<?php
interface ProductFeatures {
    function productDetails();
    function productPrice();
    function productImage();
    function productOwnerDetails();
}

class Products implements ProductFeatures {
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
    function commonFeatures() {
        echo "Common Features: ";
    }
};
$product = new Products();
$product->productDetails();
echo "<br>";
$product->productPrice();
echo "<br>";
$product->productImage();
echo "<br>";
$product->productOwnerDetails();
echo "<br>";
$product->commonFeatures();


?>