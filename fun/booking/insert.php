<?php

echo "<pre>";

// print_r($_POST);


// $type =$_POST['type'];
// $num = $_POST['num'];
$number =$_POST['number'];
$id_type =$_POST['type'];
$gmail =$_POST['gmail'];
$name =$_POST['name'];
$address =$_POST['address'];
$in =$_POST['in'];
$out =$_POST['out'];
$id =$_POST['num'];
// echo $address;

include "../conn.php";
$select ="SELECT * FROM rooms WHERE id = $id";
$query = $conn -> query($select);
$result = $query -> fetch_assoc();
$num =$result['room_num'];

$select_t ="SELECT * FROM cat_room WHERE id = $id_type";
$query_t = $conn -> query($select_t);
$result_t = $query_t -> fetch_assoc();
$num_t =$result_t['name'];








include "../conn.php";
$insert ="INSERT INTO guest( name, phone, gmail, address ,entry_date ,exit_date,room_num,room_type)
 VALUES ('$name','$number','$gmail','$address','$in','$out','$num','$num_t')";


$query = $conn ->query($insert);


if($query){
    header("location: ../../guest.php");
}else{
    echo $conn -> error;
}






?>