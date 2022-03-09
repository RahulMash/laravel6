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
  <!--  -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->

  <!--  -->
    <style>
      .page-body
      {
        margin-top:76px;
      }
      .page-content
{
float:left;
/* background-color:red;
width:20%; */
}

.page-content-left
{ width:20%;
  position:fixed;
  /* background-color:red; */
}

.page-content-right
{width:80%;
  margin-left:20%;
  /* background-color:yellow; */
}
      #sidebar {
  min-width: 100%;
  max-width: 100%;
  min-height: 100vh;
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
    display: none; }
  
    .page-content-right
{width:80%;
  margin-left:21%;
  /* background-color:yellow; */
}
  }

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
        @section('header')
          <nav class="navbar navbar-expand-lg shadow-sm   bg-white fixed-top">
    <a class="navbar-brand " href="#">
			<img src="assets/img/logo-small.png" width="100" height="50" alt="">
		</a>
        
        <button class="navbar-toggler border border-danger" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon p-1 text-success"><i class="fa fa-bars"></i></span>
        </button>
        <!-- <button type="button" id="sidebarCollapse" class="btn btn-primary ml-0.5 pull-right">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
      </button> -->
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbar-list-4">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/usr.jpeg" width="40" height="40" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>   
            </ul>
        </div>
</nav>
          @show
        </div>
      </div>
      <div class="row page-body container-fixed">
        <div class="page-content page-content-left ">
        @section('sidebar')
        <nav id="sidebar" class="fixed-left">
            <div class="p-4  ml-2">
              <ul class="list-unstyled components mb-5">
                <li class="active">
                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                  <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                  </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                  </ul>
                </li>
                  <li>
                      <a href="#">Portfolio</a>
                  </li>
                  <li>
                      <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
        @show
        </div>
        <div class=" page-content page-content-right">
        @yield('content')
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