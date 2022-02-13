HTML:

<div class="input-wrapper">
     <input type="text" />
 </div>
CSS:

<style type="text/css">
    .input-wrapper {
        display:inline-block;
        position: relative
    }
    .input-wrapper:after {
        font-family: 'FontAwesome';
        content: '\f274';
        position: absolute;
        right: 6px;
    }
</style>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
    $disabledDaysRange = array('a','b','c','c');
?>
<script>

var js_array =<?php echo json_encode($disabledDaysRange );?>;
alert(js_array);

</script>