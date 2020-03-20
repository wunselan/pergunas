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
			$foto_berita = "img_$date.$ext";
			$config['upload_path'] = './application/assets/images/berita';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']     = '3500';
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
		$config['max_size']     = '3500';
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

}
?>