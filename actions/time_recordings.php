<?php

include_once "../classes/category.php";

$category = new Category;
$category_id = $_GET['category_id'];
$daily_time = $_POST['daily_time'];

$category->update_time_recordings($category_id,$daily_time);

?>