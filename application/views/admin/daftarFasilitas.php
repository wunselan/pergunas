<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin-Resepmu</title>

  <!-- Custom fonts for this template -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/pergunas/application/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/pergunas/application/assets/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="/pergunas/application/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<style media="screen">
  .sidebar{
    background-color: #3bb570 !important;
    background-image: linear-gradient(180deg,#3bb570 10%,#3bb570 100%) !important;
  }
  .page-item.active .page-link{
    background-color: #3bb570 !important;
    border-color:#3bb570 !important;
  }

  .flex-container {
  display: flex;
  flex-direction: column;
  align-content: space-between;
  }


</style>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/daftarBerita')?>">
        <div class="sidebar-brand-text mx-3">ADMIN PERGUNAS</div>
      </a>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/daftarBerita')?>">
          <i class="fa fa-newspaper-o" ></i>
          <span>Daftar Berita</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('resep/listresep')?> ">
        <i class="fa fa-building"></i>
          <span>Daftar Fasilitas</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <i class="fa fa-user-circle" ></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('user/logout')?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <div class="accordion" id="accordionExample">
          <div class="card" style="margin-bottom:10px; border:1px solid #e3e6f0; border-radius:5px">
            <div class="card-header">
              <a class="btn btn-link" style="padding:0;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h6 style="color:#878787;"class="m-0 font-weight-bold ">Tambah Berita<small><i> (klik untuk membuka formulir)</i></small></h6></a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <form class="form" method="post" id="form" action="<?php echo base_url('admin/tambahBerita');?>" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Kategori Berita</label>
                      <select class="form-control" id="kategori" name="kategori">
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleFormControlInput1">Judul Berita</label>
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                    <textarea class="form-control" name="isi" id="" rows="7" required></textarea>
                  </div>
                  <label for="">Foto Berita <small><i>(foto boleh kosong)</i></small></label>
                  <div class="form-row">
                    <div class="custom-file col-md-6" >
                      <div class="form-group">
                        <input type="file" class="custom-file-input" id="customFile" name="foto" >
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                    <div class="col-md-6" style="text-align:right;">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Begin Page Content -->
      <div class="container-fluid">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 style="color:#878787;"class="m-0 font-weight-bold ">Daftar Berita</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Foto</th>
                    <th>Time Add</th>
                    <th>Time Updated</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($berita as $row) { ?>
                    <tr>
                      <td><?php echo $row->id_berita ?></td>
                      <td><?php echo $row->kategori_berita ?></td>
                      <td><?php echo $row->judul_berita ?></td>
                      <td><?php echo word_limiter($row->isi_berita,64) ?></td>
                      <td><?php echo $row->foto_berita ?></td>
                      <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->time_add)->format('d-m-Y H:i:s')?></td>
                      <td><?php echo DateTime::createFromFormat('Y-m-d H:i:s', $row->time_updated)->format('d-m-Y H:i:s') ?></td>
                      <td>
                        <button data-id="<?php echo $row->id_berita ?>" data-kategori="<?php echo $row->kategori_berita?>" data-judul="<?php echo $row->judul_berita ?>" data-isi="<?php echo $row->isi_berita ?>"
                          data-foto="" style="margin-bottom:6px; padding:9px; font-size:8px;" class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" >Edit</button>
                        <a href="#" style="padding:9px; font-size:8px; background-color:#d82a2a" id="hapus" data-uid='<?php echo base_url('Admin/deleteBerita/'). $row->id_berita?>' class="btn btn-primary">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="">
        <form class="form" method="post" id="form" action="" enctype="multipart/form-data">
          <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <small>Id Berita</small>
                    <input class="form-control" id="id_berita" type="text" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <small>Kategori Berita</small>
                    <select style="margin-bottom:10px;" name="kategori_berita" class="form-control" id="kategori_berita">
                      <option value="SMP" <?= $row->kategori_berita == "SMP" ? "selected" : "" ?> style="color:black;">SMP</option>
                      <option value="SMA" <?= $row->kategori_berita == "SMA" ? "selected" : "" ?> style="color:black;">SMA</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <small>Judul Berita</small>
                    <input class="form-control" name="judul_berita" id="judul_berita" type="text" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <small>Isi Berita</small>
                    <textarea class="form-control" rows="10" name="isi_berita" id="isi_berita" type="text" placeholder="" required></textarea>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span style="width:75px; height:32px; font-size:8px;" class="input-group-text" id="inputGroupFileAddon01">Upload Foto</span>
                    </div>
                    <div class="custom-file">
                      <input accept="image/*" type="file" id="foto_berita" name="foto_berita" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <p style="font-size:12px;" class="custom-file-label" for="inputGroupFile01">Choose file</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer ">
                  <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2019</span>
        </div>
      </div>
    </footer>
  </div>
</div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


  <!-- Bootstrap core JavaScript-->
  <script src="/pergunas/application/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/pergunas/application/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/pergunas/application/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/pergunas/application/assets/js/sb-admin-2.min.js"></script>
  <script type="text/javascript" src="/pergunas/application/assets/ckeditor/ckeditor.js"></script>

  <!-- Page level plugins -->
  <script src="/pergunas/application/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/pergunas/application/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/pergunas/application/assets/js/datatables-demo.js"></script>
  <script src="/pergunas/application/assets/sweetalert/sweetalert.min.js"></script>
  <script src="/pergunas/application/assets/sweetalert/jquery.sweet-alert.custom.js"></script>


<script>

$('#collapseOne').collapse({'toggle': true});
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

var url = '<?php echo base_url('Admin/updateBerita/')?>';
$(document).on('click','#hapus',function(e){
  e.preventDefault();
  var uid=$(this).data('uid');
  swal(
        {
            title: "Apakah anda yakin menghapus data ini?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f96332",
            cancelButtonText: "Tidak",
            confirmButtonText: "Ya",
            closeOnCancel: true,
            closeOnConfirm: false
        },
        function (isConfirm) {
          if (isConfirm) {
            window.location=uid;
          }                    }
    );
});

$("#dataTable").on("click", ".edit", function(e) {
    e.preventDefault();
    $('#id_berita').val($(this).data('id'));
    $('#kategori_berita').val($(this).data('kategori'));
    $('#judul_berita').val($(this).data('judul'));
    $('#isi_berita').val($(this).data('isi'));
    $('#foto_berita').val($(this).data('foto'));
    $('#form').attr("action", url + $(this).data('id'));
});
// $(document).ready(function () {
//     $('#email').on({
//         invalid: function (e) {
//             e.target.setCustomValidity("");
//             if (!e.target.validity.valid) {
//                 e.target.setCustomValidity("Email tidak valid");
//              }
//         },
//         input: function(e) {
//             e.target.setCustomValidity("");
//         }
//     });
// });
document.addEventListener("DOMContentLoaded", function() {
  console.log("DOM loaded");
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
          if(e.target.validity.badInput){
            e.target.setCustomValidity("Masukan harus angka");
            return;
          }
            if (e.target.validity.valueMissing) {
                e.target.setCustomValidity("Data tidak boleh kosong");
                return;
            }

        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
});
document.addEventListener("DOMContentLoaded", function() {
  console.log("DOM loaded");
    var elements = document.getElementsByTagName("TEXTAREA");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
          if(e.target.validity.badInput){
            e.target.setCustomValidity("Masukan harus angka");
            return;
          }
            if (e.target.validity.valueMissing) {
                e.target.setCustomValidity("Data tidak boleh kosong");
                return;
            }

        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})

</script>
</body>
</html>
