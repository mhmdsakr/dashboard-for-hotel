<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM guest where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../guest.php');
}else{
    echo $conn -> $error;
}

?>