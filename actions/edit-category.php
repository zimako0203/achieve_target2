<?php
 include_once "../classes/category.php";

$category_name = $_POST['category_name'];
$category_id = $_GET['category_id'];

$category = new Category;

$category->updateCategory($category_name,$category_id);
?>