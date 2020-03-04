<style>
.fa-circle{
	color:#3bb570;
}
.fa-stack { font-size: 61%; }
  i { vertical-align: middle; }
.mu-about-right p{
	margin-bottom:16px;
}
.mu-about-right ul li{
	margin-bottom:0px;
}
.informasi {
	background-color: #f9f6f7 !important;
	color: #343a40 !important;
}
.visimisi{
	color: #343a40 !important;
}
.visimisi{
	background-color: #f9f6f7 !important;
}
.mu-about-area h1, h2, h3 {
	color:#343a40 !important;
}
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

h1, h2, h3, p {

    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
#pot{
-webkit-animation-name: slideInFromLeft;
-webkit-animation-duration: 1s;
}
hr.ad{
	border-top: 3px solid rgb(59, 181, 112);
	margin-top: 0;
	width: 15%;
	float:left;
}
img{
	max-width: 2200px;
	width: 100%;
	max-height: 640px;
	height: 100%;
}

</style>
<body>
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="/pergunas/application/assets/images/template.jpg" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content" id="pot">
									<h1>Welcome to b-hero</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="/pergunas/application/assets/images/template2.jpg" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content" >
									<h1>We Promote Your Business</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="/pergunas/application/assets/images/template2.jpg" alt="slider img">
				<div class="mu-single-slide-content-area" >
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>Free Multipurpose Template</h1>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
		    <img class="d-block w-100" src="/pergunas/application/assets/images/pergunas.jpg" alt="First slide">
				 <div id="pot" class="carousel-caption">
					<h4>Selamat Datang</h4>
					<h1>SMP & SMA Perguruan Nasional 1</h1>
					<p>Sekolah Ini Terakredetasi "B"</p>
				</div>
		  </div>
		  <div class="carousel-item">
		    <img class="d-block w-100" src="/pergunas/application/assets/images/pergunas2.jpg" alt="Second slide">
				<div id="pot" class="carousel-caption">
				 <h3>Selamat Datang</h3>
				 <h1>SMP & SMA Perguruan Nasional 1</h1>
				 <p>Sekolah Ini Terakredetasi "B"</p>
			 </div>
		  </div>
		  <div class="carousel-item">
		    <img class="d-block w-100" src="/pergunas/application/assets/images/pergunas3.jpg" alt="Third slide">
				<div id="pot" class="carousel-caption d-xs-block">
				 <h3>Selamat Datang</h3>
				 <h1>SMP & SMA Perguruan Nasional 1</h1>
				 <p>Sekolah Ini Terakredetasi "B"</p>
			 </div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>

</section> -->
	<main>
		<!-- Start About -->
		<section id="mu-about" class="informasi">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>
											<span class="fa-stack" style="vertical-align: top;">
												<i class="fa fa-circle fa-stack-2x" aria-hidden="true"></i>
												<i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i>
											</span>
										Informasi Sekolah</h2>
									</div>
								</div>
							</div>
							<!-- End Title -->
							<div class="row">
								<div class="col-12">
									<div class="mu-about-right">
										<ul>
											<div class="row">
												<div class="col-md-12">
													<li style="margin-bottom: 5%;">
														<h3>Informasi SMP</h3>
														<br/>
														<hr class="ad">
														<br/>
														<ul>

															<li>
															<div class="post-list" id="dataList">
																<!-- Display posts list -->
																<?php if(!empty($posts)){ foreach($posts as $row){ ?>
																	<p><?php echo $row["judul_berita"]; ?><a href="<?php echo base_url("Welcome/berita/".$row["id_berita"]); ?>"> Baca Selengkapnya</a></p>
																<?php } }else{ ?>
																	<p>Tidak Ada Informasi</p>
																<?php } ?>
																
																<!-- Render pagination links -->
																<?php echo $this->ajax_pagination->create_links(); ?>
															</div>
															</li>
															<br/>
														</ul>
													</li>
												</div>
												<div class="col-md-12">
													<li>
														<h3>Informasi SMA</h3>
														<br/>
														<hr class="ad">
														<br/>
														<ul>

															<li>
															<div class="post-list2" id="dataList2">
																<!-- Display posts list -->
																<?php if(!empty($posts2)){ foreach($posts2 as $row2){ ?>
																	<p><?php echo $row2["judul_berita"]; ?><a href="<?php echo base_url("Welcome/berita/".$row2["id_berita"]); ?>"> Baca Selengkapnya</a></p>
																<?php } }else{ ?>
																	<p>Tidak Ada Informasi</p>
																<?php } ?>
																
																<!-- Render pagination links -->
																<?php echo $this->ajax_pagination2->create_links2(); ?>
															</div>
															</li>
															<br/>
														</ul>
													</li>
												</div>
											</div>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">
							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-6">
										<div class="mu-single-counter text-center">
											<span class="fa fa-suitcase"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="25">0</div>
												<h5 class="mu-counter-name">Guru</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-6">
										<div class="mu-single-counter text-center">
											<span class="fa fa-user"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="100">0</div>
												<h5 class="mu-counter-name">Siswa/i</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="mu-about" class="visimisi">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2 style="color:#343a40 !important;">SMP & SMA Perguruan Nasional (PERGUNAS)</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="mu-title">
										<h2 style="color:#343a40 !important;">VISI</h2>
										<hr>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
									</div>
								</div>

								<div class="col-md-6">
									<div class="mu-title">
										<h2 style="color:#343a40 !important;">MISI</h2>
										<hr>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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


      <!-- Custom js -->
    	<script type="text/javascript" src="/pergunas/application/assets/js/custom.js"></script>

</body>
