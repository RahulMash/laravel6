<!DOCTYPE html>
<html>

<head>
	<title>
		How to Align navbar logo to the
		left screen using Bootstrap ?
	</title>

	<link href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			rel="stylesheet" integrity=
"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity=
"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
	</script>
	
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity=
"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous">
	</script>
    <style>
    .bg-custom-1 {
  background-color: #85144b;
}

.bg-custom-2 {
background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
}
.toggle-css
{
    border:1px solid black;
}
</style>
</head>

<body>
	<nav class=" navbar navbar-expand-lg shadow-sm p-3 mb-5 bg-white fixed-top  py-lg-0 ">
		<a class="navbar-brand " href="#">
			<!-- Add logo with size of 90*80 -->
			<img src="asset/img/logo-small.png" width="100" height="50" alt="">
		</a>
        <button class="navbar-toggler border border-danger" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbar-list-4">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="asset/img/usr.jpeg" width="40" height="40" class="rounded-circle">
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
</body>

</html>
