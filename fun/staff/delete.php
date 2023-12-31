<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM staff where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../staff.php');
}else{
    echo $conn -> $error;
}

?>