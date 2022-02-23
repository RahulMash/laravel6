<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Test page for Highlight Search Terms</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="highlight.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('#search').on('keyup', function(){
            console.log($(this).val());
                $('.x').unhighlight();
                $('.x').highlight($(this).val());

        });    
    });
    </script>
<style type="text/css">
  .highlight {
    font-weight: bold;
  }
</style>
<body>
  <input type="text" id="search"></input>
   <p class="x">Highlight plugin searches through the text of given elements
    in this case to find the term (word 'highlight' in our example) to 
    highlight. When the term is found it's simply wrapped with </p>
</body>
</html>