<?php

//db connection

$db = new PDO('mysql:host=localhost;dbname=ibrahim;charset=utf8mb4', 'root', '');

//build query

$query = "UPDATE `courses` SET `subject_code` = '".$_POST['subject_code']."', `subject_title` = '".$_POST['subject_title']."' WHERE `id` = ".$_POST['id'];
echo $query;
//query execute

$result = $db->exec($query);



if($result){
    //echo "Data has been submitted successfully.";
    header("location:index.php");
}else{
    echo "There is some error. Please try again later.";
}