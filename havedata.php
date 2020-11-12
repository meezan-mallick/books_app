<?php
include("database.php");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($conn->connect_error)
{
    die ("connection error".$conn->connect_error);
}
else{
    // echo "connection success";
    $query = "select * from books_app";
    $result = $conn->query($query);

    if($result->num_rows >0)
    {
        echo 1;
    }
    else{
        
    }
}



?>