<?php

include_once "../classes/category.php";

$category = new Category;
$category_id = $_GET['category_id'];

$category->reset_time_recordings($category_id);

?>