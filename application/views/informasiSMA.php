<div class="infosma" style="height:190px;">
  <?php if(!empty($posts2)){ foreach($posts2 as $row2){ ?>
    <p><?php echo $row2["judul_berita"]; ?><a href="<?php echo base_url("Welcome/berita/".$row2["id_berita"]); ?>"> Baca Selengkapnya</a></p>
  <?php } }else{ ?>
    <p>Tidak Ada Informasi</p>
  <?php } ?>
</div>

<div class="pag" style="margin-top:20px;">
  <!-- Render pagination links -->
  <?php echo $this->ajax_pagination2->create_links2(); ?>
</div>
