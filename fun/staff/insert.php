<?php


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../staff.php");
    exit();

}

    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $occ = $_POST['occ'];

    include "../conn.php";

    $insert ="INSERT INTO staff
    (name , job_id , salary) 
    values
    ('$name' , '$occ' , '$salary')";

    $query = $conn -> query($insert);

    if($query){
        header("location:../../staff.php");
    }else{
        echo $conn -> error;
    }



?>