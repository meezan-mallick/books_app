<?php 
include "database.php";
// $id =  $_POST["id"];
$id =  $_POST["id"];


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if($conn->connect_error)
    {
        die ("connection error".$conn->connect_error);
    }
    
    $query = "select * from books_app";
    $result = $conn->query($query);

    $output = "  <thead class='thead-dark'>
                    <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Book Name</th>
                    <th scope='col'>ISBN No</th>
                    <th scope='col'>Category ID</th>
                    <th scope='col'>Author ID</th>
                    <th scope='col'>Publication ID</th>
                    <th scope='col'>Publication Date</th>
                    <th scope='col'>Publication Language</th>
                    <th scope='col'>Book Pages</th>
                    <th scope='col'>Book Price</th>
                    </tr>
                </thead>
                <tbody>
            ";

    if($result->num_rows >0)
    {
        while ($row = $result->fetch_assoc())
        {
             
            $output .= "
            <tr>
                <td>".$row['book_id']."</td>
                <td>".$row['book_name']."</td>
                <td>".$row['book_isbn_id']."</td>
                <td>".$row['book_cat_id']."</td>
                <td>".$row['book_auth_id']."</td>
                <td>".$row['book_pb_id']."</td>
                <td>".$row['book_pb_date']."</td>
                <td>".$row['book_pb_lang']."</td>
                <td>".$row['book_pages']."</td>
                <td>".$row['book_price']."</td>
                
            
            </tr>
            ";
        }
    }
    else{
        echo "no data";
    }

    $output .= "</tbody>";
    echo $output;


?>