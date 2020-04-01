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
