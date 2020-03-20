<style media="screen">
  .img{
    width: 100%;
    height: auto;
  }
  .a{
    padding: 1%;
    background-color: rgb(237, 242, 245);
  }
  h3{
    text-transform: none !important;
  }
  .mu-title{
    margin-top: 3%;
    text-align: left;
    padding: 0;
    margin-bottom:1%;
  }
  hr.ad{
    border-top: 3px solid rgb(59, 181, 112);
    margin-top: 5px;
    width: 40%;
    float:left;
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
					<div class="mu-page-header-area" id="pot">
            <h1 style="text-align:center; color:white;">Berita</h1>
            <h1 style="text-align:center; color:white;">SMP & SMA Perguruan Nasional</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
  <main>
    <section id="mu-blog" class="mu-blog-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="mu-blog-area">
              <div class="row">
                <div class="col-md-8 a">
                  <img src="/pergunas/application/assets/images/Berita/<?=$berita[0]["foto_berita"]?>" alt="" class="img" style="width:800px;">
                  <div class="row">
                    <div class="col-md-12" style="text-align:left;">
                      <span class="badge badge-secondary"><span class="fa fa-calendar"></span><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $berita[0]["time_updated"])->format(' d-m-Y'); ?></span>
                      <span class="badge badge-success"><span class="fa fa-clock-o"></span><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $berita[0]["time_updated"])->format(' H:i'); ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-title">
                        <h3 style="margin-bottom:0;"><?php echo $berita[0]["judul_berita"]?></h3>
                        <hr class="ad">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="isi" style="text-align:left;">
                        <p style="overflow-wrap: break-word;"><?php echo $berita[0]["isi_berita"]?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="mu-blog-sidebar">
                    <div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Informasi Terbaru</h2>
											<div class="mu-popular-content-widget">
                        <?php
                          foreach($terbaru as $t){
                            if($t["foto_berita"]== null){
                              $t["foto_berita"] = "blog-img-1.jpg";
                            }
                        ?>
                        <div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="/pergunas/application/assets/images/berita/<?=$t["foto_berita"]?>" style="width:125px;" alt="image"></a>
												  <div class="media-body" style="text-align:left;">
                            <div class="row">
                              <div class="col-md-12">
                                <span class="badge badge-secondary"><span class="fa fa-calendar"></span><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $t["time_updated"])->format(' d-m-Y'); ?></span>
                                <span class="badge badge-success"><span class="fa fa-clock-o"></span><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $t["time_updated"])->format(' H:i'); ?></span>
                              </div>
                            </div>
                            <small style="font-size:10px;"><?php echo $t['kategori_berita']?></small>
													<h3><a href="<?php echo base_url("Welcome/berita/".$t['id_berita'])?>"><?php echo $t['judul_berita']?></a></h3>
												  </div>
												</div>
                        <?php  } ?>
                    
											</div>

										</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
