<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			rel="stylesheet" integrity=
"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity=
"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
	</script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity=
"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous">
	</script>
    <style>
      #sidebar {
  min-width: 300px;
  max-width: 300px;
  background: #1d1919;
  color: #fff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s; }

  #sidebar.active {
    margin-left: -300px; }

  #sidebar .logo {
    display: block;
    width: 120px;
    height: 120px;
    margin: 0 auto; }

    #sidebar .logo span {
      display: block; }

  #sidebar ul.components {
    padding: 0; }

  #sidebar ul li {
    font-size: 16px; }
    
    #sidebar ul li > ul {
      margin-left: 10px; }
      #sidebar ul li > ul li {
        font-size: 14px; }
    #sidebar ul li a {
      padding: 10px 0;
      display: block;
      color: rgba(255, 255, 255, 0.8);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
      #sidebar ul li a:hover {
        color: #f8b739; }
    #sidebar ul li.active > a {
      background: transparent;
      color: #f8b739; }

      @media (max-width: 991.98px) {
  #sidebarCollapse span {
    display: none; } }

    #content {
  width: 100%;
  padding: 0;
  min-height: 100vh;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s; }

      @supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

}

    </style>
</head>
<body style="overflow-x:hidden;padding:0px;margin:0px">
  <div class="wrapper d-flex align-items-stretch">
    <div id="content" class="">
      <div class="row">
        <div class="col-sm-12">
          @include('header-sidebar.sidebar-header')
        </div>
      </div>
      <div class="row container">
        <div class="page-content float-left">
        @include('header-sidebar.sidebar')
        </div>
        <div class="page-content">
        <button type="button" id="sidebarCollapse" class="btn btn-primary ml-0.5">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
      </button>
        </div>
      </div>

      
    </div>
  </div>
    <script>
        (function($) {

    "use strict";

    var fullHeight = function() {

      // $('.js-fullheight').css('height', $(window).height());
      // $(window).resize(function(){
      //   $('.js-fullheight').css('height', $(window).height());
      // });

    };
    // fullHeight();

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    })(jQuery);
    </script>
</body>
</html>