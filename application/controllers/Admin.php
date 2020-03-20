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
			redirect('/admin/daftarBerita');
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
			$query = $this->Admin_model->tambahFasilitas($input);
			redirect('/admin/daftarFasilitas');
		}

}
?>
