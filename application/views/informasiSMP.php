<!-- Display posts list -->
<?php if(!empty($posts)){ foreach($posts as $row){ ?>
    <p><?php echo $row["judul_berita"]; ?><a href="<?php echo base_url("Welcome/berita/".$row["id_berita"]); ?>"> Baca Selengkapnya</a></p>
<?php } }else{ ?>
    <p>Tidak Ada Informasi</p>
<?php } ?>

<!-- Render pagination links -->
<?php echo $this->ajax_pagination->create_links(); ?>