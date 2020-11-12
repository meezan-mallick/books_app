<?php 


$id =  $_POST["stu_id"];

echo $id;
include "database.php";

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($conn->connect_error)
{
    die ("connection error".$conn->connect_error);
}

else
{
    $query = "delete from books_app where book_id = ".$id."";
    
    if($conn->query($query))
    {
        echo 1;
    }
    else
    {
        echo 0;
    }

}


    
    
    
?>