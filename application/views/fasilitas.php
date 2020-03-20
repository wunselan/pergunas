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
                        <div class="row">
                                <!-- Start Portfolio Filter -->
                                <div class="mu-portfolio-filter-area">
                                    <ul class="mu-simplefilter">
                                        <li class="active" data-filter="all">All<span>/</span></li>
                                        <li data-filter="1">Kelas<span>/</span> </li>
                                        <li data-filter="2">Lab IPA<span>/</span></li>
                                        <li data-filter="3">Lab Komputer<span>/</span></li>
                                        <li data-filter="4">Ruang Guru<span>/</span> </li>
                                        <li data-filter="5">Lapangan</li>
                                    </ul>
                                </div>
                        </div>
                        <div class="row">
                            <div class="mu-portfolio-content">
                                <div class="filtr-container">
                                    <?php if(!empty($fasilitas)){ foreach($fasilitas as $row){ ?>
                                    <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="<?php echo $row['kategori_fasilitas'];?>">
                                        <a href="#" class="thumbnail img-responsive" id="caption" data-toggle="modal" data-caption="<?php echo $row['ruangan_fasilitas'];?>" data-image="/pergunas/application/assets/images/portfolio/<?=$row["foto_fasilitas"]?>" data-target="#trslphotos"><img src="/pergunas/application/assets/images/portfolio/img-1.jpg" alt="recent photo">
                                            <div class="mu-filter-item-content">
                                                <h4 class="mu-filter-item-title"><?php echo $row['ruangan_fasilitas'];?></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } }else{ ?>
                                        <p>Tidak Ada Informasi</p>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>

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

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.filtr-container').filterizr();

        //Simple filter controls

        $('.mu-simplefilter li').click(function() {
        $('.mu-simplefilter li').removeClass('active');
            $(this).addClass('active');
        });

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

    </script>
</body>
