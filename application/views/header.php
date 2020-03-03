<!DOCTYPE html>
<html lang="en">
<style>

a{

  background-color: transparent !important;
}
ul a {
  font-size: 70% !important;
}
.navbar-brand {
  font-size: 127% !important;
}
/* .fixed-top{
  background-color: #2fc56b;
  padding: 10px 50px !important;
} */
a.dropdown-item:link{
  color:#343a40 !important;
}
a.dropdown-item:hover{
  color:#35D073 !important;
}
a.dropdown-item{
  border-radius: 0px !important;
}
.navbar-toggler{
  border:0px !important;
}
.dropdown-menu{
  border:0px !important;
  border-radius: 0px !important;
}
.fixed-top.scrolled {
  background-color: #3bb570 !important;
  transition: background-color 500ms ease-in-out;
}
.fixed-top.scrolled .mu-navbar-nav,
.mu-navbar-nav li a:hover,
.mu-navbar-nav li a:focus{
  color: #ced1d5 !important;
  transition: background-color 500ms ease-in-out !important;
}
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMP & SMA Perguruan Nasional</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/pergunas/application/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="/pergunas/application/assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <!-- Skills Circle CSS  -->
    <link href="/pergunas/application/assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">


    <!-- Main Style -->
    <link href="/pergunas/application/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


	</head>
  <body>


  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar fixed-top">
				<!-- Text based logo -->
				<!-- image based logo -->
        <a class="navbar-brand mu-logo col-auto" href="index.html"><span>PERGUNAS</span></a>
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
			  <button class="navbar-toggler col-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="nav-item active">
			        <a href="<?php echo base_url("Welcome/") ?>"><i style="font-size:16px;" class="fa fa-home" aria-hidden="true"></i></a>
			      </li>
			      <li class="nav-item"><a href="<?php echo base_url("Welcome/sdm") ?>">Sumber Daya Manusia</a></li>
			      <li class="nav-item"><a href="<?php echo base_url("Welcome/organisasi") ?>">Struktur Organisasi</a></li>
			      <!-- <li class="nav-item"><a href="portfolio.html">Portfolio</a></li> -->
            <!-- <li class="nav-item dropdown">
			        <a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
			       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="blog.html">Blog Archive</a>
			          <a class="dropdown-item" href="blog-single.html">Blog Single</a>
			       </div>
				    </li> -->
            <li class="nav-item"><a href="<?php echo base_url("Welcome/fasilitas") ?>">Fasilitas</a></li>
		        <li class="nav-item"><a href="<?php echo base_url("Welcome/fbk") ?>">Feedback</a></li>
			    </ul>
			  </div>
			</nav>

    </div>
	</header>
	<!-- End Header -->
  <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

  	<!-- Slick slider -->
      <script type="text/javascript" src="/pergunas/application/assets/js/slick.min.js"></script>
      <!-- Progress Bar -->
      <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
      <!-- Filterable Gallery js -->
      <script type="text/javascript" src="/pergunas/application/assets/js/jquery.filterizr.min.js"></script>
      <!-- Gallery Lightbox -->
      <script type="text/javascript" src="/pergunas/application/assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Counter js -->
      <script type="text/javascript" src="/pergunas/application/assets/js/counter.js"></script>
      <!-- Ajax contact form  -->
      <script type="text/javascript" src="/pergunas/application/assets/js/app.js"></script>


     

      <script>
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
  		// First circle
  	    new Circlebar({
          element : "#circle-1",
          type : "progress",
  	      maxValue:  "90"
  	    });

  		// Second circle
  	    new Circlebar({
          element : "#circle-2",
          type : "progress",
  	      maxValue:  "84"
  	    });

  	    // Third circle
  	    new Circlebar({
          element : "#circle-3",
          type : "progress",
  	      maxValue:  "60"
  	    });

  	    // Fourth circle
  	    new Circlebar({
          element : "#circle-4",
          type : "progress",
  	      maxValue:  "74"
  	    });

  	</script>
  </body>
</html>
