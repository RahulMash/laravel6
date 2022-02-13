<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  
  <!-- CSS only -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        #empty-message { float: left; }
            input { float: left }
           
        
ul li{
    border-bottom: 1px solid #d4d4d4; 
}
    </style>
</head>
<body>
    <div class="container">
        <input />
        <p id="empty-message"></p>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button> -->

        <!-- add school Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"></div>
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-12 text-center ">
                                <button type="button" id="addSchoolBtn" data-toggle="modal" data-target="#schoolFormModal" class="btn btn-warning"  >Add School</button>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <!-- add school Modal -->
        <!--  school form Modal -->
        <div class="modal fade" id="schoolFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"></div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" >Form</button>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <!--  school form Modal -->
    </div>
</body>
<?php 
$country = array("ActionScript","AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang","Fortran","Groovy","Haskell","Java","JavaScript","Lisp","Perl","PHP","Python","Ruby","Scala","Scheme");
// dd($country);
?>
<script>
    var countries =<?php echo json_encode($country);?>;
// var countries = [
//             "ActionScript",
//             "AppleScript",
//             "Asp",
//             "BASIC",
//             "C",
//             "C++",
//             "Clojure",
//             "COBOL",
//             "ColdFusion",
//             "Erlang",
//             "Fortran",
//             "Groovy",
//             "Haskell",
//             "Java",
//             "JavaScript",
//             "Lisp",
//             "Perl",
//             "PHP",
//             "Python",
//             "Ruby",
//             "Scala",
//             "Scheme"
//             ];
$(function() {
    $("input").autocomplete({
        source: countries,
        select:function(response,ui){
            if(ui.item.label == "Add School"){
                $("#exampleModal").modal("show");
                
            }
        },
        change :function(response,ui){
            if(ui.item.label == "Add School"){
                $("input").val('');
                // alert(123);
                
            }
        },
        response: function(event, ui) {
            var label = {"label":"Add School","value":"AddNew"};
            ui.content.push(label);
            // $("input").val('');
        }
    } 
    )
    // .data("ui-autocomplete")._renderItem = function(ul, item)
    //     {
    //         var expression = new RegExp(this.term, "gi");
    //         var result = expression.exec(item.label);
    //         var answer;
    //         if(result.index == '')
    //         {   
    //             var first = item.label.charAt(0);
                
    //             var remaining = item.label.slice(1,item.label.length);
                
    //             var first1 = first.replace(expression,"<span style='font-weight:bold'>"+ this.term.toUpperCase() +"</span>");
                
    //             var remaining1 = remaining.replace(expression,"<span style='font-weight:bold'>"+ this.term.toLowerCase() +"</span>");
    //             answer = first1 + remaining1;
                
    //         }
    //         // else
    //         // {   alert(456);
    //             var answer = item.label.replace(expression , "<span style='font-weight:bold'>"+ this.term.toLowerCase() +"</span>");
    //             return $("<li></li>")
    //             .append( answer)
    //             .appendTo(ul);
    //         // }
           
    //     }

    $('#addSchoolBtn').on('click',function(){
        // alert(123);
        $("#exampleModal").modal('hide');
    });
});

</script>
</html>