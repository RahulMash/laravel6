<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  /* .ui-state-active,
  .ui-widget-content .ui-state-active,
  .ui-widget-header .ui-state-active,
  a.ui-button:active,
  .ui-button:active,
  .ui-button.ui-state-active:hover {
    background: transparent !important;
    font-weight: normal;
    color: black !important;
    width: 100% !important;
    min-width: 200px !important;
    border: 0px !important;
  } */

</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div style="margin-top:50px;">
  <label for="TestAutocomplete">Subjects</label>
  <input type="text" id="TestAutocomplete" class="validate" />


</div>
<script>
    $(document).ready(function () {

var datalist = ["hindi", "english", "math", "science", "geography", "socialscience", "sanskrit"]
$("#TestAutocomplete").autocomplete({
    source: datalist,

    response: function (event, ui) {
        ui.content.push({
            value: '', label: "Add new item"
        });
        ui.content.push({
            value: event.target.value, label: event.target.value
        });
    },


}).data("ui-autocomplete")._renderItem = function (ul, item) {
    if (item.value == '') {
        return $('<li class="ui-state-disabled" style="padding-left:5px;">' + item.label + '</li>').appendTo(ul);
    }
    var expression = new RegExp(this.term, 'gi');
    var highlight = item.label.replace(expression, "<span style='font-weight:bold;'>" + this.term + "</span>")
    return $("<li>")
        .append("<a>" + highlight + "</a>")
        .appendTo(ul);


}
})

</script>
</body>
</html>