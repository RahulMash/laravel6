<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
 
</head>
<body>

    <div class="container-fluid">
        <div class="row">
               <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajaxaddmodel"> Launch demo modal </button>

    <!-- Add Modal -->
    <div class="modal fade" id="ajaxaddmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addform">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>
    <!--Add modal  -->
        <!-- edit Modal -->
    <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addform">
                    <ul id="updatefrom_errorList"></ul>
                    
                    <div class="form-group">
                        <input type="text" value="" id="edit_ajax_id">
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
                    <button type="submit" class="btn btn-primary update_ajax">Update changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <!-- delete Modal -->
    <div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addform">
                    <ul id="updatefrom_errorList"></ul>
                    <input type="text" value="" id="delete_ajax_id">
                   
                   
                   
                    <button type="submit" class="btn btn-primary delete_ajax_btn">Delete Data</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
    </div>
    <!-- delete modal -->
        </div> 
        <div class="row">

            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div id="success_message"></div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
     
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            fetchajax();
            function fetchajax()
            {
                $.ajax({
                    type:"GET",
                    url:"fetch-ajax",
                    dataType:"json",
                    success:function(response)
                    {
                        // console.log(response.ajax)
                        $('tbody').html("");
                        $.each(response.ajax,function (key,item)
                        {
                            $('tbody').append('<tr>\
                            <th scope="row">'+item.id+'</th>\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            <td><button class="edit_ajax btn btn-primary" id="editStudentModal" value="'+item.id+'" >Edit</button><button value="'+item.id+'" id="deleteStudentModal" class="delete_ajax btn btn-danger" >Delete</button></td>\
                        </tr>')
                        });
                    }
                });
            } 
            $('#addform').on('submit', function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                });

                $.ajax({
                    type: "POST",
                    url: "/ajaxadd",
                    data: $("form").serialize(),
                    success: function(response) {
                        // console.log(response)
                        $("#addform").trigger('reset');
                        $("#ajaxaddmodel").modal("hide");
                        fetchajax();
                        alert("data  saved");
                    },
                    error: function(error)
                    {
                        // console.log(error)
                        alert("Data not saved");
                    }
                });
            });
        });

        $(document).on('click','.delete_ajax', function(e){
            e.preventDefault();
                var ajax_id = $(this).val();
                $('#delete_ajax_id').val(ajax_id);
                $('#deleteStudentModal').modal('show');
        });

        $(document).on('click','.delete_ajax_btn',function(e){
            e.preventDefault();
            function fetchajax()
            {
                $.ajax({
                    type:"GET",
                    url:"fetch-ajax",
                    dataType:"json",
                    success:function(response)
                    {
                        // console.log(response.ajax)
                        $('tbody').html("");
                        $.each(response.ajax,function (key,item)
                        {
                            $('tbody').append('<tr>\
                            <th scope="row">'+item.id+'</th>\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            <td><button class="edit_ajax btn btn-primary" id="editStudentModal" value="'+item.id+'" >Edit</button><button class="delete_ajax btn btn-danger" id="deleteStudentModal" value="'+item.id+'" >Delete</button></td>\
                        </tr>')
                        });
                    }
                });
            } 
            

            $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                });
                var ajax_id = $('#delete_ajax_id').val();
                $.ajax({
                    type: "DELETE",
                    url : "/delete-ajax/"+ajax_id,
                    success : function(response){
                        console.log(response);
                        $('#success_message').addClass("alert alert-danger");
                        $('#success_message').html(response.message);
                        $('#deleteStudentModal').modal('hide');
                        fetchajax();
                    }
                });
        });

        $(document).on('click','.edit_ajax' , function(e)
        {
            e.preventDefault();
            var ajax_id = $(this).val();
            //  alert(ajax_id);
            // console.log(ajax_id);
            $('#editStudentModal').modal('show');

            $.ajax({
                type:"GET",
                url:"/edit-ajax/"+ajax_id,
                success:function (response) {
                    // console.log(response);
                    if(response.status == 404)
                    {
                        $("#succes_message").html("");
                        $("#succes_message").addClass('alert alert-danger');
                        $("#succes_message").text(response.message);
                    }
                    else
                    {
                        $("#edit_name").val(response.ajax.name);
                        $("#edit_email").val(response.ajax.email);
                        $("#edit_ajax_id").val(response.ajax.id);
                    }
                }
            });
        });

        $(document).on('click','.update_ajax', function(e){

            function fetchajax()
            {
                $.ajax({
                    type:"GET",
                    url:"fetch-ajax",
                    dataType:"json",
                    success:function(response)
                    {
                        // console.log(response.ajax)
                        $('tbody').html("");
                        $.each(response.ajax,function (key,item)
                        {
                            $('tbody').append('<tr>\
                            <th scope="row">'+item.id+'</th>\
                            <td>'+item.name+'</td>\
                            <td>'+item.email+'</td>\
                            <td><button class="edit_ajax btn btn-primary" id="editStudentModal" value="'+item.id+'" >Edit</button><button class="delete_ajax btn btn-danger" id="deleteStudentModal" value="'+item.id+'" >Delete</button></td>\
                        </tr>')
                        });
                    }
                });
            } 
            e.preventDefault();
             var ajax_id = $('#edit_ajax_id').val();
             var data = {
                 'name' : $('#edit_name').val(),
                 'email' : $('#edit_email').val()
             }
             $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                });

            $.ajax({
                type:"PUT",
                url:"/update-ajax/"+ajax_id,
                data: data,
                dataType:"json",
                success: function(response){
                     
                    if(response.status == 400)
                    {
                        $('#updatefrom_errorList').html("");
                        $('#updatefrom_errorList').addClass("alert alert-danger");
                        // console.log(response.message);
                        $.each(response.message, function (key, err_values) {
                            
                            $('#updatefrom_errorList').append('<li>'+err_values+'</li>');
                        });

                    }
                    else if(response.status == 404)
                    {
                        $('#updatefrom_errorList').html("");
                        $('#success_message').addClass("alert alert-danger");
                        $('#success_message').html("");
                    }
                    else{
                        $('#updatefrom_errorList').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass("alert alert-danger");
                        $('#success_message').text(response.message);
                        $('#editStudentModal').modal('hide');
                        fetchajax();
                    }
                }
            });
        });
       
        

    </script>
</body>
</html>