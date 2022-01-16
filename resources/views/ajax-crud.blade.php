<!DOCTYPE html>
<html lang="en">
<head><meta  name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

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
    
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>edit</td>
    </tr>
    
  </tbody>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form id="form_todo">
         <input type="hidden" name="id" id="id">
         Name : <input type="text" class="form-control"  name="" id="name"><br>
         Email : <input type="email" class="form-control" name="" id="email" ><br>
         <button type="submit" class="btn btn-primary"> Save </button>

         </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</table>
</body>
<script>
  $(document).ready(function(){
    $("form").on('submit',function(e){ 
                e.preventDefault();
                $.ajax({
                    url:"ajax-crud/store",
                    data: $("#form_todo").serialize(),
                    type:'POST'
                }).done(function(res){
                    var row = '<tr id="row_todo_'+ res.id + '">';
                    row += '<td>' + res.id + '</td>';
                    row += '<td>' + res.name + '</td>';
                    row += '<td>' + '<button type="button" id="edit_todo" data-id="' + res.id +'" class="btn btn-info btn-sm mr-1">Edit</button>' + '<button type="button" id="delete_todo" data-id="' + res.id +'" class="btn btn-danger btn-sm">Delete</button>' + '</td>';
                   
                    if($("#id").val()){
                        $("#row_todo_" + res.id).replaceWith(row);
                    }else{
                        $("#list_todo").prepend(row);
                    }

                    $("#form_todo").trigger('reset');
                    $("#exampleModal").modal('hide');

                });
            });
  })

</script>
</html>