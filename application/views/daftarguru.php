<style media="screen">
  ul li{
    list-style:none;
  }
  #mu-team{
    background-color: #f9f6f7 !important;
  }
  .mu-single-team{
    background-color: #e9e9e9 !important;
  }
  .mu-title{
    text-align: left;
    padding-left: 0px;
    padding-right: 0px;
  }
  @media only screen and (max-width: 576px) {
    .mu-sidebar-widget{
      width: 42% !important;
    }
  }
  .mu-sidebar-widget{
    float: right;
    margin-bottom: 10px;
    width: 30%;
  }
  input:focus {
  border: 2px solid #3bb570;
  border-radius: 20px;
  }
  .mu-search-form .mu-search-submit-btn input:focus{
    color:#3bb570 !important;
  }
  h1, h2, h3, p, {

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
  -webkit-animation-name: run;
  -webkit-animation-duration: 2s;
  }
    @-webkit-keyframes run {
      0% {
        transform: translateX(-30%);
      }
      100% {
        transform: translateX(0);
      }
    }
  }

</style>
<body>
  <div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="pot" class="mu-page-header-area">
            <h3 style="text-align:center; color:white;">Sumber Daya Manusia</h3>
            <h1 style="text-align:center; color:white;">SMP & SMA Perguruan Nasional</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- <section id="mu-testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="pot" class="mu-testimonials-area">
            <h3 style="text-align:center; color:white;">Sumber Daya Manusia</h3>
            <h1 style="text-align:center; color:white;">SMP & SMA Perguruan Nasional</h1>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section id="mu-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-team-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Creative team</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>
							<!-- Start Team Content -->
              <div class="row">
								<div class="col-md-12">
                  <div class="mu-sidebar-widget">
                    <form class="mu-search-form" action="<?php echo base_url('Welcome/search');?>" method="post">
    									<input type="search" placeholder="Search" name="cari">
    									<button class="mu-search-submit-btn" type="submit"><i class="fa fa-search"></i></button>
    								</form>
    							</div>
                </div>
              </div>
              <div id="datalist">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-team-content">
                      <div class="row">
                        <!-- start single item -->

                        <?php if(!empty($sdm)){ foreach($sdm as $row){ ?>
                        <div class="col-md-6">
                          <div class="mu-single-team">
                            <div class="" id="dataList">
                                <div class="mu-single-team-img">
                                  <img src="/pergunas/application/assets/images/guru/<?=$row["foto_guru"]?>" alt="img">
                                </div>
                                <div class="mu-single-team-content">
                                  <h3><?php echo $row["nama_guru"]?></h3>
                                  <span><?php if($row["jabatan_guru"]==1){echo "Kepala Sekolah";}else if($row["jabatan_guru"]==2){echo "Wakil Kepala Sekolah";}else if($row["jabatan_guru"]==3){echo "Guru";}?></span>
                                  <p><?php echo $row["mapel_guru"]?></p>
                                  <small><?php echo $row["email_guru"]?></small>
                                </div>

                            </div>
                          </div>
                        </div>
                        <?php } }else{ ?>
                                <p>Tidak Ada Informasi</p>
                              <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <?php echo $this->ajax_pagination->create_links(); ?>
                    </div>
                  </div>
                </div>
              </div>

							<!-- End Team Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
  <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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
