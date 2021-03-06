<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function __construct(){
	    parent::__construct();
	    $this->load->helper('text');
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->model('Admin_model');
    }

    public function daftarBerita(){
      $data['berita'] = $this->Admin_model->daftarBerita()->result();
			$this->load->view('admin/daftarBerita', $data);
    }

    public function deleteBerita($id_berita){
      $this->Admin_model->deleteBerita($id_berita);
      redirect('Admin/daftarBerita', 'location');
    }

    public function updateBerita($id_berita){
      if ($_FILES["foto_berita"]["size"] !==0 ) {
				$ext = pathinfo($_FILES["foto_berita"]["name"], PATHINFO_EXTENSION);
				$date = date("dmYhis");
				$foto_berita = "berita_$date.$ext";
				$config['upload_path'] = './application/assets/images/berita';
				$config['allowed_types'] = 'jpg|png|jpeg';
				// $config['max_size']     = '3500';
				$config['file_name'] = $foto_berita;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$upload = $this->upload->do_upload('foto_berita');
				$input->foto_berita = $foto_berita;
			}

	    $post = $this->input->post();
	    $input->kategori_berita = $post['kategori_berita'];
	    $input->judul_berita = $post['judul_berita'];
			$input->isi_berita = $post['isi_berita'];
	    $query = $this->Admin_model->updateBerita($input, $id_berita);
	    redirect('Admin/daftarBerita', 'location');
		}

		public function tambahBerita(){
			$ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
			$date = date("dmYhis");
			$foto = "berita_$date.$ext";
			$config['upload_path'] = './application/assets/images/berita';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $foto;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('foto');

			$post = $this->input->post();
	    $input->kategori_berita = $post['kategori'];
	    $input->judul_berita = $post['judul'];
			$input->isi_berita =  $post['isi'];
			if($ext==""){
				$input->foto_berita = "";
			}else{

				$input->foto_berita = $foto;
			}
			$query = $this->Admin_model->tambahBerita($input);
			$this->sendmail();
			redirect('/admin/daftarBerita');
		}

		public function sendmail(){
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'lblacklordb@gmail.com',
				'smtp_pass' => 'lblcklrdb',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1'
			);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			$guru = $this->Admin_model->daftarGuru()->result_array();
			$from_email = "admin-pergunasgmail.com";
			for($i=0; $i<count($guru); $i++){
				$to_email[] = $guru[$i]['email_guru'];
			}
			$this->email->to(implode(', ', $to_email));
			$this->email->from($from_email, "Admin Pergunas");
			$this->email->subject('Pengumuman Baru');
			$guru = $this->Admin_model->beritaById()->result_array();
			$this->email->message("<p><b>Judul pengumuman : </b>".$guru[0]['judul_berita']."</p>
			<p><b>Kategori : </b>".$guru[0]['kategori_berita']."</p>
			<p><b>Link pengumuman :</b> localhost/pergunas/welcome/berita/".$guru[0]['id_berita']."</p>");
		   //Send mail
		   if($this->email->send()){
				 $this->session->set_flashdata("email_sent","
				 <div class='alert alert-success' id='notifemail' role='alert'>
						 Berita berhasil ditambahkan dan email terkirim
				 </div>");
			 }else{
				 $this->session->set_flashdata("email_sent","
				 <div class='alert alert-danger' id='notifemail' role='alert'>
						 Berita tidak berhasil ditambahkan
				 </div>");
			 }
		}

		public function daftarFasilitas(){
			$data['fasilitas'] = $this->Admin_model->daftarFasilitas()->result();
			$this->load->view('admin/daftarFasilitas', $data);
		}

		public function deleteFasilitas($id_fasilitas){
      $this->Admin_model->deleteFasilitas($id_fasilitas);
      redirect('Admin/daftarFasilitas', 'location');
    }

		public function updateFasilitas($id_fasilitas){
			if ($_FILES["foto_fasilitas"]["size"] !==0 ) {
				$ext = pathinfo($_FILES["foto_fasilitas"]["name"], PATHINFO_EXTENSION);
				$date = date("dmYhis");
				$foto_fasilitas = "fasilitas_$date.$ext";
				$config['upload_path'] = './application/assets/images/fasilitas';
				$config['allowed_types'] = 'jpg|png|jpeg';
				// $config['max_size']     = '3500';
				$config['file_name'] = $foto_fasilitas;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$upload = $this->upload->do_upload('foto_fasilitas');
				$input->foto_fasilitas = $foto_fasilitas;
			}

	    $post = $this->input->post();
	    $input->ruangan_fasilitas = $post['ruangan_fasilitas'];
	    $input->kategori_fasilitas = $post['kategori_fasilitas'];
	    $query = $this->Admin_model->updateFasilitas($input, $id_fasilitas);
	    redirect('Admin/daftarFasilitas', 'location');
		}

		public function tambahFasilitas(){
			$ext = pathinfo($_FILES["foto_fasilitas1"]["name"], PATHINFO_EXTENSION);
			$date = date("dmYhis");
			$foto_fasilitas1 = "fasilitas_$date.$ext";
			$config['upload_path'] = './application/assets/images/fasilitas';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $foto_fasilitas1;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('foto_fasilitas1');

			$post = $this->input->post();
	    $input->ruangan_fasilitas = $post['ruangan_fasilitas1'];
	    $input->kategori_fasilitas = $post['kategori_fasilitas1'];
			$input->foto_fasilitas = $foto_fasilitas1;
			// $query = $this->Admin_model->tambahFasilitas($input);
			if($this->Admin_model->tambahFasilitas($input)){
				$this->session->set_flashdata("notiftambah","
				<div class='alert alert-success' id='notiftambah' role='alert'>
						Fasilitas berhasil ditambahkan
				</div>");
			}else{
				$this->session->set_flashdata("notiftambah","
				<div class='alert alert-danger' id='notiftambah' role='alert'>
						Fasilitas tidak berhasil ditambahkan
				</div>");
			}
			redirect('/admin/daftarFasilitas');
		}

		public function daftarGuru(){
			$data['guru'] = $this->Admin_model->daftarGuru()->result();
			$this->load->view('admin/daftarGuru', $data);
		}

		public function deleteGuru($id_guru){
      $this->Admin_model->deleteGuru($id_guru);
      redirect('Admin/daftarGuru', 'location');
    }

		public function updateGuru($id_guru){
			if ($_FILES["foto_guru"]["size"] !==0 ) {
				$ext = pathinfo($_FILES["foto_guru"]["name"], PATHINFO_EXTENSION);
				$date = date("dmYhis");
				$foto_guru = "guru_$date.$ext";
				$config['upload_path'] = './application/assets/images/guru';
				$config['allowed_types'] = 'jpg|png|jpeg';
				// $config['max_size']     = '3500';
				$config['file_name'] = $foto_guru;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$upload = $this->upload->do_upload('foto_guru');
				$input->foto_guru = $foto_guru;
			}

	    $post = $this->input->post();
	    $input->nama_guru = $post['nama_guru'];
	    $input->jabatan_guru = $post['jabatan_guru'];
	    $input->mapel_guru = $post['mapel_guru'];
	    $input->nohp_guru = $post['nohp_guru'];
	    $input->email_guru = $post['email_guru'];
	    $query = $this->Admin_model->updateGuru($input, $id_guru);
	    redirect('Admin/daftarGuru', 'location');
		}

		public function tambahGuru(){
			$ext = pathinfo($_FILES["foto_guru1"]["name"], PATHINFO_EXTENSION);
			$date = date("dmYhis");
			$foto_guru1 = "guru_$date.$ext";
			$config['upload_path'] = './application/assets/images/guru';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['file_name'] = $foto_guru1;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$upload = $this->upload->do_upload('foto_guru1');

			$post = $this->input->post();
			$input->nama_guru = $post['nama_guru1'];
	    $input->jabatan_guru = $post['jabatan_guru1'];
	    $input->mapel_guru = $post['mapel_guru1'];
	    $input->nohp_guru = $post['nohp_guru1'];
	    $input->email_guru = $post['email_guru1'];
			$input->foto_guru = $foto_guru1;
			// $query = $this->Admin_model->tambahGuru($input);
			if($this->Admin_model->tambahGuru($input)){
				$this->session->set_flashdata("notiftambah","
				<div class='alert alert-success' id='notiftambah' role='alert'>
						Guru berhasil ditambahkan
				</div>");
			}else{
				$this->session->set_flashdata("notiftambah","
				<div class='alert alert-danger' id='notiftambah' role='alert'>
						Guru tidak berhasil ditambahkan
				</div>");
			}
			redirect('/admin/daftarGuru');
		}

}
?>
