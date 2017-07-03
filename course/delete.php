<?php

//db connection

$db = new PDO('mysql:host=localhost;dbname=ibrahim;charset=utf8mb4', 'root', '');

$query = "DELETE FROM `courses` WHERE `id` = ".$_GET['id'];


$result = $db->exec($query);

header("location:index.php");

if($result){
    echo "Data has been deleted successfully.";
}else{
    echo "There is some error. Please try again later.";
}

?>
