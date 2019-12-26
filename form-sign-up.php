<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

	<title>Form Sign Up</title>

	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css"> 
	<style type="text/css">
		.card {
			margin: 75px auto;
        	width: 400px;
        	padding: 10px;
        	border: 1px solid #ccc;
        	background: #F5F5DC;
		}

		#tr {
			margin: 250px auto;
        	width: 400px;
        	padding: 10px;
		}
		#td {
			margin-top: 10px; 
			margin-bottom: 10px;
		}


	</style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-md-right">
              <a href="form-sign-up.php" class="p-3">Sign up</a>
              <a href="form-sign-in.php" class="p-3">Sign in</a>
            </div>
          </div>
        </div>
      </div>

      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="#" class="text-white">VISO ( Village Information SOcial)</a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="active">
                	<a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori </a>
                	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
             	   		<a class="dropdown-item" href="causes.html"> Info Desa </a>
                   		<a class="dropdown-item" href="elements.html"> Info Prestasi </a>
                	</div>
               	</li>
                <li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sistem </a>
              		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    	<a class="dropdown-item" href="donasi.html">Donasi</a>
                       	<a class="dropdown-item" href="Penilaian.html">Penilaian</a>
           	        </div>
                </li>
                <li>
                	<a href="about.html" class="nav-link">About Us</a>
                </li>
                <li>
                	<a href="contact.html" class="nav-link">Contact</a>
                </li>
              </ul>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a>
            </div>
          </div>
        </div>
      </header>
	<div class="card">
		<form action="proses-sign-up.php" method="POST">
			<table align="center">
				<center>
					<img src="images/desa.webp" width="35%"><br><font"><b>Sign Up</b></font></center>
				<br>
				<tr>
					<td>Nama </td>
					<td>:</td>
					<td>
						<input type="text" name="Nama">
					</td>
				</tr>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input type="Email" name="Email">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>
						<input type="text" name="alamat">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input type="password" name="Password">
					</td>
				</tr>
			</table>
			<br>
			<center>
				<button type="submit" class="btn btn-success">Sign Up</button>
			</center>
			<br>
			<font> Sudah Punya Akun ? </font><a href="form-sign-in.php">Sign In</a>
		</form>
	</div>
</body>
</html>