$(document).ready(function (){
    //to check whether any data is present in table

    function show_data()
    {
        $('#form').css("display","none");
        $('#table').css("display","block");
        $('#mytable').css("display","block");
        $.ajax({
            url : "show_data.php",
            type : "POST",
            success: function (data)
            {
                $('#mytable').html(data);
            }
        });
       
    }


    function have_data()
    {
        $.ajax({
            url:"havedata.php",
            type: "POST",
            success:function(data)
            {
                if(data)
                {
                    alert("have data");
                    $('#form').css("display","none");
                    $('#table').css("display","block");
                    $('#button-section').css("display","block");
                    $('#insert-section').css("display","none");
                    show_data();
                }
                else
                {
                    // alert("no have data");
                    $('#form').css("display","none");
                    $('#table').css("display","none");
                    $('#button-section').css("display","none");
                    $('#insert-section').css("display","block");
                    
                }
        
            }
        });
    }
    have_data();


$('#insert-btn').click(function(){
    $('#form').css("display","block");
    $('#button-section').css("display","block");
    $('#insert-section').css("display","none");
});


// ------4 buttons at top---------------------------------------
$('#add-btn').click(function(){

    $('#table').css("display","none");
    $('#mytable').css("display","none");
    $('#form').css("display","block");
   
});

$('#show-btn').click(function(){
    show_data();
   
});

$('#update-btn').click(function(){

    alert("hii");
});
 // ----END-of-4 buttons at top------------------------------------


 //--- inserting data into database-------------
 $('#submit').click(function(){
    var id = $('#book_id').val();
    var name = $('#book_name').val();
    var isbn = $('#book_isbn').val();
    var cat_id = $('#book_cat_id').val();
    var auth_id = $('#book_auth_id').val();
    var pb_id = $('#book_pb_id').val();
    var pb_date = $('#book_pb_date').val();
    var pb_lang = $('#book_pb_lang').val();
    var page = $('#book_page').val();
    var price = $('#book_price').val();

    if(id == "" || name == "" || isbn == "" || cat_id == "" || auth_id == "" || pb_id == "" || pb_date == "" || pb_lang == "" || page == "" || price == ""){
        alert("blank field");
    }
    else{
        $.ajax({
            url : "add_data.php",
            type : "POST",
            data : {name : name, isbn : isbn, cat_id : cat_id, auth_id : auth_id, pb_id : pb_id, pb_date : pb_date, pb_lang : pb_lang, page : page, price : price},
            success : function(data)
            {
               
                show_data();
            }
        });
    }
   
    });


});