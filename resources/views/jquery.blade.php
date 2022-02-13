<!doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <title>jQuery UI Autocomplete - Default functionality</title>  
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  
  <link rel="stylesheet" href="/resources/demos/style.css">  
  <script>  
  $(function () {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"];
    $("#tags").autocomplete({
        source: availableTags
    });
});
$(document).ready(function () {
    $('#tags').on('autocompletechange change', function () {
      var tags =  $('#tags').val();
        $('#tagsname').html('You selected: ' + this.value);
    }).change();
});
  </script>  
</head>  
<body>  
<div class="ui-widget">
    <label for="tags">Tags:</label>
    <input id="tags" />
    <div id="tagsname"></div>
</div>
</body>  
</html>