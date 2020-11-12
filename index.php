<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Books App</title>
</head>
<body>
<div class="container mt-4">
        <div class="row bg-success p-3 text-white">
            <h1>Books App</h1>
            <h2></h2>
        </div>
    

        <div id="insert-section" style="text-align:center;display:none" class="row">
            <div class="col-12 mt-4 ">
                <h1>No records. Insert data.</h1>
                <button id="insert-btn" class="btn btn-primary mt-3">Insert</button>
            </div>
        </div>

        <div id="button-section" style="text-align:center;display:none" class="row">
            <div class="col-12 mt-4 ">
                <button id="add-btn" class="btn btn-success mt-3">Add Book</button>
                <button id="show-btn" class="btn btn-success mt-3">Show Book</button>
                <button id="update-btn" class="btn btn-success mt-3">Update Book</button>
                <button id="delete-btn" class="btn btn-success mt-3">Delete</button>
            </div>
        </div>

        <div id="update-section" style="text-align:center;display:none" class="row">
            <form class="form-inline col-12 mt-5 offset-4">
                
                <div class="form-group mx-sm-3 mb-2">
            
                    <input type="text" class="form-control" id="update-book_idd"     placeholder="Enter Book ID">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>

            <div id="livesearch"></div>
        </div>

        <div id="table" class="row mt-5" style="display:none" class="row">
            <div class="p-3 ">
                <div class="col-12 center">

                    <table id="mytable" class="table table-striped table-hover">


                    </table>
                </div>
            </div>
        </div>


       

        <div class="row">
            <div style="display:none"  id="form" class="p-3 border shadow mt-3 offset-3 col-6">
                <h2 class="text-success ">Book Details</h2>
                <form>
                    <div class="form-group">
                        <label>Book Id</label>
                        <input type="number" class="form-control" id="book_id" required placeholder="Enter Book ID">
                    </div>
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" id="book_name" required placeholder="Enter Book Name">
                    </div>
                    <div class="form-group">
                        <label>Book ISBN No</label>
                        <input type="text" class="form-control" id="book_isbn" required placeholder="Enter Book ISBN No">
                    </div>
                    <div class="form-group">
                        <label>Book Catergory Id</label>
                        <input type="text" class="form-control" id="book_cat_id" required placeholder="Enter Catergory Id">
                    </div>
                    <div class="form-group">
                        <label>Book Author Id</label>
                        <input type="text" class="form-control" id="book_auth_id" required placeholder="Enter Book Author Id">
                    </div>
                    <div class="form-group">
                        <label>Book Publication Id</label>
                        <input type="text" class="form-control" id="book_pb_id" required placeholder="Enter Book Publication Id">
                    </div>
                    <div class="form-group">
                        <label>Book Publication Date</label>
                        <input type="date" class="form-control" id="book_pb_date" required >
                    </div>
                    <div class="form-group">
                        <label>Book Publication Language</label>
                        <input type="text" class="form-control" id="book_pb_lang" required placeholder="Enter Book Publication Language">
                    </div>
                    <div class="form-group">
                        <label>Book No of Pages</label>
                        <input type="number" class="form-control" id="book_page" required placeholder="Enter Book No of pages">
                    </div>
                    <div class="form-group">
                        <label>Book Price</label>
                        <input type="number" class="form-control" id="book_price" required placeholder="Enter Book Pricerequired">
                    </div>
  
                    <button id="submit" type="submit" class="btn btn-success">Add Book</button>
                </form>
            </div>
        </div>

    
    </div>

   

     <!-- jQuery, Popper.js, and Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

    <script src="app.js"></script>
   
</body>
</html>