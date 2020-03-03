<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		// $jumlah_berita=$this->Welcome_model->getBeritaSMP()->num_rows();
		// $config['base_url'	]= base_url(). '/Welcome/index';
		// $config['total_rows']=$jumlah_berita;
		// $config['per_page']=2;
		// $config['uri_segment'] = 4;

		// $config['full_tag_open']="<ul class='pagination float-right'>";
		// $config['full_tag_close']="</ul>";
		// $config['num_tag_open']="<li class='page-item'>";
		// $config['num_tag_close']="</li>";
		// $config['cur_tag_open']="<li class='disabled'><li class='page-item active'><a class='page-link' href='#'>";
		// $config['cur_tag_close']="<span class='sr-only'></span></a></li></li>";
		// $config['next_tag_open']="<li class='page-item'>";
		// $config['next_tag_close']="</li>";
		// $config['prev_tag_open']="<li class='page-item'>";
		// $config['prev_tag_close']="</li>";
		// $config['first_tag_open']="<li class='page-item'>";
		// $config['first_tag_close']="</li>";
		// $config['last_tag_open']="<li class='page-item'>";
		// $config['last_tag_close']="</li>";
		// $config['attributes'] =array('class' => 'page-link');
		// $this->pagination->initialize($config);

		
		// $data['halaman']=$this->pagination->create_links();
		// $data['start']=$start;
		// $data['beritasmp']=$this->Welcome_model->getBeritaSMP($config['per_page'], $start)->result_array();

		$this->load->view('header');
		$this->load->view('informasi');
		$this->load->view('footer');
	}
	public function sdm(){
		$this->load->view('header');
		$this->load->view('daftarguru');
		$this->load->view('footer');
	}
	public function fbk(){
		$this->load->view('header');
		$this->load->view('feedback');
	}
	public function berita($id_berita){
		$data['berita']=$this->Welcome_model->getBeritaById($id_berita)->result_array();
		$data['terbaru']=$this->Welcome_model->getBeritaTerbaru()->result_array();
		$this->load->view('header');
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}
	public function organisasi(){
		$this->load->view('header');
		$this->load->view('organisasi');
		$this->load->view('footer');
	}
	public function fasilitas(){
		$this->load->view('header');
		$this->load->view('fasilitas');
		$this->load->view('footer');
	}
	
}
