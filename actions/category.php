<?php
 include_once "../classes/category.php";

$category_name = $_POST['category_name'];

$category = new Category;

$category->createCategory($category_name);
?>