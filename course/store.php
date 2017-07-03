<?php

//db connection

$db = new PDO('mysql:host=localhost;dbname=ibrahim;charset=utf8mb4', 'root', '');

//build query

$query = "INSERT INTO `courses` ( `subject_code`, `subject_title`,`created_at`, `modified_at`) 
VALUES ( '".$_POST['subject_code']."', '".$_POST['subject_title']."', NOW(), NOW())";

//query execute

$result = $db->exec($query);


if($result){
    echo "Data has been submitted successfully.";
}else{
    echo "There is some error. Please try again later.";
}


// try catch



?>

<a href="index.php">Click here</a> to see course list.
