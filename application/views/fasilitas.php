<style>
    .modal-header{
        display: block;
    }
    @media screen and (min-width: 992px) {
        .modal-dialog{
            max-width: 739px;
        }
    }
    @media screen and (max-width: 992px){
        .modal-dialog{
            max-width: 500px;
        }
    }
    .gallery {
      -webkit-column-count: 3;
      -moz-column-count: 3;
      column-count: 3;
      -webkit-column-width: 33%;
      -moz-column-width: 33%;
      column-width: 33%;
    }

    .gallery .pics {
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease; }
      .gallery .animation {
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }
    .filter{
      font-size: 16px !important;
    }
    @media (max-width: 450px) {
      .gallery {
      -webkit-column-count: 1;
      -moz-column-count: 1;
      column-count: 1;
      -webkit-column-width: 100%;
      -moz-column-width: 100%;
      column-width: 100%;
      }


    }
    @media (max-width: 600px) {
      .filter{
        font-size: 12px !important;
      }


    }

</style>
<body>
    <div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="pot" class="mu-page-header-area">
            <h3 style="text-align:center; color:white;">Fasilitas</h3>
            <h1 style="text-align:center; color:white;">SMP & SMA Perguruan Nasional</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
    <section id="mu-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-portfolio-area">
                      <!-- Grid row -->
                      <div class="row">
                        <!-- Grid column -->
                        <div class="mu-portfolio-filter-area">
                            <ul class="mu-simplefilter">
                                <li class="active filter" data-rel="all">All<span>/</span></li>
                                <li class="filter" data-rel="1">Kelas<span>/</span> </li>
                                <li class="filter" data-rel="2">Lab IPA<span>/</span></li>
                                <li class="filter" data-rel="3">Lab Komputer<span>/</span></li>
                                <li class="filter" data-rel="4">Ruang Guru<span>/</span> </li>
                                <li class="filter" data-rel="5">Lapangan</li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                      </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                    <div class="modal fade" id="trslphotos" tabindex="-1" role="dialog" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" style="font-color:black;" class="close fa fa-times" data-dismiss="modal" aria-hidden="true"></button>
                                     <h4 style="" class="modal-title" id="captions"></h4>
                                 </div>
                                 <div class="modal-body"><img src="" class="img-responsive"></div>
                             </div>
                         </div>
                     </div>


                      <div class="gallery" id="gallery" style="padding-top:40px;">
                        <!-- Grid column -->
                        <?php if(!empty($fasilitas)){ foreach($fasilitas as $row){ ?>

                            <div class="mb-3 pics animation all <?= $row['kategori_fasilitas'];?>">
                              <a href="#" class="thumbnail img-responsive" id="caption" data-toggle="modal" data-caption="<?php echo $row['ruangan_fasilitas'];?>" data-image="/pergunas/application/assets/images/fasilitas/<?=$row["foto_fasilitas"]?>" data-target="#trslphotos"><img class="img-fluid" src="/pergunas/application/assets/images/fasilitas/<?=$row["foto_fasilitas"]?>" alt="recent photo">
                              </a>
                            </div>

                          <?php } }else{ ?>
                              <p>Tidak Ada Informasi</p>
                          <?php } ?>
                        <!-- Grid column -->
                      </div>
                      <!-- Grid row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // $('.filtr-container').filterizr();
        //
        // //Simple filter controls
        //
        // $('.mu-simplefilter li').click(function() {
        // $('.mu-simplefilter li').removeClass('active');
        //     $(this).addClass('active');
        // });
        //
        $('#trslphotos').on('shown.bs.modal', function (a, b,c) {
            var clickedImageUrl = a.relatedTarget.childNodes[0].src;
            var caption =  document.getElementById("caption").getAttribute("data-caption");
            displayPhotos(clickedImageUrl, caption);
        })

        function displayPhotos(url, caption) {
            console.log(url);
            console.log(caption);
            $('.modal-body img').attr('src',url);
            $('#trslphotos').modal();
            document.getElementById("captions").innerHTML = caption;
        }

        $(function() {
        var selectedClass = "";
          $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            $('.mu-simplefilter li').click(function() {
            $('.mu-simplefilter li').removeClass('active');
                $(this).addClass('active');
            });
            setTimeout(function() {
              $("."+selectedClass).fadeIn().addClass('animation');
              $("#gallery").fadeTo(300, 1);
            }, 300);
          });
        });

    </script>
</body>
