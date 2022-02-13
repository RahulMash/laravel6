<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Customer Name</th>
         <th>Address</th>
         <th>City</th>
         <th>Postal Code</th>
         <th>Country</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div> 

    </div>
    <script>
        $(document).ready(function()
        {
            fetch_customer_data();
            function fetch_customer_data(query='')
            {
                $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                }
                            });

                $.ajax({
                    url:"/search_result",
                    method:"POST",
                    data:{query:query},
                    dataType:"json",
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $("#total_records").text(data.total_data);
                    }
                });
            }

            $(document).on('keyup','#search', function()
            {  // alert(123);
                var query = $(this).val();
                fetch_customer_data(query);
            });           
        });
    </script>
</body>
</html>