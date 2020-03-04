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
		$this->load->library('ajax_pagination');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->model('Welcome_model');
		$this->perPage=5;
	}
	public function index(){ 
        $data = array(); 
		 
        // Get record count 
        $conditions['returnType'] = 'count'; 
		$totalRec = $this->Welcome_model->getRows($conditions); 
		
        
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('Welcome/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'limit' => $this->perPage 
        ); 
        $data['posts'] = $this->Welcome_model->getRows($conditions); 
         
		// Load the list page view 
		$this->load->view('header');
		$this->load->view('informasi', $data);
		$this->load->view('footer');
    } 
     
    function ajaxPaginationData(){ 
        // Define offset 
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->Welcome_model->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('Welcome/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => $this->perPage 
        ); 
        $data['posts'] = $this->Welcome_model->getRows($conditions); 
         
		$this->load->view('ajax-data', $data, false);
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
	public function getData(){
		$data=$this->Welcome_model->getBerita();
		echo json_encode($data);
	}
}
