<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div id="success_message"></div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                Launch demo modal
                </button>
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                </tbody>
                </table>
                   <!-- delete Modal -->
                        <div class="modal fade" id="deletePracticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <ul id="deletefrom_errorList"></ul>
                                        <input type="text" value="" id="delete_practice_id">
                                    
                                    
                                    
                                        <button type="submit" class="btn btn-primary delete_practice_btn">Delete Data</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- delete modal -->

                            <!-- edit Modal -->
            <div class="modal fade" id="editPracticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editform">
                            <ul id="editfrom_errorList"></ul>
                            
                            <div class="form-group">
                                <input type="text" value="" id="edit_practice_id">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="edit_name" aria-describedby="emailHelp" placeholder="Enter name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="edit_email" placeholder="Email">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary update_practice">Update changes</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                    </div>
                </div>
            </div>
            <!-- edit modal -->

                
                
                <!-- Add form Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form id="addform">
                        <ul id="addfrom_errorList"></ul>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        
                        <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            fetchPractice();
            function fetchPractice()
            {
                $.ajax({
                    type:"GET",
                    url:"fetch-practice",
                    dataType:"json",
                    success : function(response)
                    {
                        $("tbody").html("");
                        $.each(response.ajax, function(key,item){
                            $('tbody').append('<tr>\
                            <td>'+item.id+'<td>\
                            <td>'+item.name+'<td>\
                            <td>'+item.email+'<td>\
                            <td><button class="btn btn-primary edit_practice" id="editPractice" value="'+item.id+'">Edit</button></td><td><button class="btn btn-danger delete_practice " value="'+item.id+'"    >Delete</button><td>\
                            </tr>')
                        });

                    }
                });
                

            }
            $('#addform').on('submit',function(e){
                // console.log(8989);
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                });

                $.ajax({
                    type:"post",
                    url:"/addpractice",
                    data:$("form").serialize(),
                    success: function (response)
                    {   //alert(9090);
                        if(response.status == 400)
                        {   
                            $("#addfrom_errorList").html("");
                            $("#addfrom_errorList").addClass("alert alert-danger");
                            $.each(response.message,function(key,error_values){
                                $("#addfrom_errorList").append('<li>'+error_values+'</li>')
                            });
                        }
                        else if(response.status == 404)
                        {
                            $("addfrom_errList").html("");
                            $("#success_message").addClass('alert alert-danger');
                            $("success_message").html("");
                        }
                        else
                        {
                            $('#addfrom_errorList').html("");
                            $('#success_message').html("");
                            $('#success_message').addClass("alert alert-danger");
                            $('#success_message').text(response.message);
                            $('#addform').trigger('reset');
                            $('#addModal').modal('hide');
                            fetchPractice();
                        }
                        
                    }
                });
            })

           
        });

        

        $(document).on('click','.delete_practice', function(e){
        e.preventDefault();
            var practice_id = $(this).val();

            $('#delete_practice_id').val(practice_id);
            $('#deletePracticeModal').modal('show');
        });

        $(document).on('click','.delete_practice_btn',function(e)
        {   
            e.preventDefault();

            function fetchPractice()
            {
                $.ajax({
                    type:"GET",
                    url:"fetch-practice",
                    dataType:"json",
                    success : function(response)
                    {
                        $("tbody").html("");
                        $.each(response.ajax, function(key,item){
                            $('tbody').append('<tr>\
                            <td>'+item.id+'<td>\
                            <td>'+item.name+'<td>\
                            <td>'+item.email+'<td>\
                            <td><button class="btn btn-primary edit_practice" id="editPractice" value="'+item.id+'">Edit</button></td><td><button class="btn btn-danger delete_practice " value="'+item.id+'"    >Delete</button><td>\
                            </tr>')
                        });

                    }
                });
                

            }

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':'{{ csrf_token() }}',
                },
            });

            var practice_id = $('#delete_practice_id').val();
            $.ajax({
                type:"DELETE",
                url : "delete-practice/"+practice_id,
                success: function(response)
                {
                    $("#success_message").addClass("alert alert-danger");
                    $("#success_message").html(response.message);
                    $("#deletePracticeModal").modal('hide');
                    fetchPractice();
                }

            });
        });

        $(document).on('click','.edit_practice',function(e)
        {
            e.preventDefault();
            var practice_id = $(this).val();
            $('#editPracticeModal').modal('show');

            $.ajax({
                type:"GET",
                url : "/edit-practice/"+practice_id,
                success:function (response)
                {
                    if(response.status == 404)
                    {

                    }else
                    {
                        $('#edit_practice_id').val(response.ajax.id);
                        $('#edit_name').val(response.ajax.name);
                        $('#edit_email').val(response.ajax.email);
                    }
                }
            });
        });

        $(document).on('click','.update_practice',function(e)
        {
            e.preventDefault();

            var edit_practice_id = $("#edit_practice_id").val();
            data ={
                edit_name : $("#edit_name").val(),
                edit_email : $("#edit_email").val(),
            };

            $.ajaxSetup({

                headers:{
                    'X-CSRF-TOKEN':"{{ csrf_token() }}",
                }
                
            });

            $.ajax({
                type:"PUT",
                url:"/update-practice/"+edit_practice_id,
                data:data,
                dataType:"json",
                success:function(response)
                {
                    // console.log(response);
                    if(response.status == 400)
                    {   //alert(123);
                        $("#editfrom_errorList").html("");
                        $('#editfrom_errorList').addClass("alert alert-danger");
                        $.each(response.message, function(key,err_val)
                        {
                            $("#editfrom_errorList").append("<li>"+err_val+"</li>");
                        });
                    }
                    else if(response.status == 404)
                    {
                        $("#editfrom_errorList").html("");
                        $('#editfrom_errorList').addClass("alert alert-danger");
                        $('#editfrom_errorList').html(response.message);
                    }
                    else
                    {
                        $("#success_message").html("");
                        $('#success_message').addClass("alert alert-danger");
                        $('#success_message').html(response.message);
                        $("#editform").trigger('reset');
                        $("#editPracticeModal").modal('hide');
                        fetchPractice();
                    }
                }
            });
        });

    </script>
</body>
</html>