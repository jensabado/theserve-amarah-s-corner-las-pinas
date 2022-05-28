<?php
require_once '../includes/database_conn.php';

$productCategory = $_POST['category-list'];
$productSubcategory = $_POST['subcategory-list'];
$productTitle = mysqli_real_escape_string($conn, ucwords($_POST['product_title']));
$productUrl = $_POST['product_url'];
$productPrice = $_POST['product_price'];
$productSalePrice = $_POST['product_salePrice'];
$productImage1Name = $_FILES['product_image1']['name'];
$productImage1TmpName = $_FILES['product_image1']['tmp_name'];
$productKeyword = $_POST['product_keyword'];

$checkProduct = mysqli_query($conn, "SELECT * FROM product WHERE product_title = '$productTitle'");

if(mysqli_num_rows($checkProduct) > 0) {
    echo 'product already exist';
} else {
    $imgExt = explode('.', $productImage1Name);
    $imgExt = strtolower(end($imgExt));

    $newImageName = uniqid() . '.' . $imgExt;

    move_uploaded_file($productImage1TmpName, '../assets/images/' . $newImageName);

    $insertProduct = mysqli_query($conn, "INSERT INTO product (category_id, subcategory_id, product_title, product_slug, product_img1, product_keyword, product_price, product_sale) VALUES ('$productCategory', '$productSubcategory', '$productTitle', '$productUrl', '$newImageName', '$productKeyword', '$productPrice', '$productSalePrice')");

    if($insertProduct) {
        echo 'success';
    } else {
        echo 'failed';
    }
}