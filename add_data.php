<?php 
include "database.php";
$name =  $_POST["name"];
$isbn =  $_POST["isbn"];
$cat_id =  $_POST["cat_id"];
$auth_id =  $_POST["auth_id"];
$pb_id =  $_POST["pb_id"];
$pb_date =  $_POST["pb_date"];
$pb_lang =  $_POST["pb_lang"];
$page =  $_POST["page"];
$price =  $_POST["price"];


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($conn->connect_error)
{
    die ("connection error".$conn->connect_error);
}

else
{
    $query = "insert into books_app (book_name,book_isbn_id,book_cat_id,book_auth_id,book_pb_id,book_pb_date,book_pb_lang,book_pages,book_price) 
    values ( '".$name."' , '".$isbn."' , '".$cat_id."' , '".$auth_id."' , '".$pb_id."' , '".$pb_date."' , '".$pb_lang."' , '".$page."' , '".$price."' )";
    
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