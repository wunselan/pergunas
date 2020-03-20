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
		$this->load->library('ajax_pagination2');
		$this->load->library('form_validation');
		$this->load->model('Welcome_model');
		$this->perPage=2;
	}

	public function index(){ 
		$data = array(); 
		 
        // Get record count 
        $conditions['returnType'] = 'count'; 
		$totalRec = $this->Welcome_model->getRows($conditions);
		$conditions2['returnType2'] = 'count2'; 
		$totalRec2 = $this->Welcome_model->getRowsSMA($conditions2);  

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// Pagination configuration 
		$config['target']      = '#dataList'; 
		$config['base_url']    = base_url('Welcome/ajaxPaginationData'); 
		$config['total_rows']  = $totalRec; 
		$config['per_page']    = $this->perPage; 
		
		$this->ajax_pagination->initialize($config); 
		 
        // Get records 
        $conditions = array( 
            'limit' => $this->perPage 
		);
		
		$data['posts'] = $this->Welcome_model->getRows($conditions);
		//////////////////////////////////////////////////////////////////////////////////////////////////////////
		$config2['target']      = '#dataList2'; 
        $config2['base_url']    = base_url('Welcome/ajaxPaginationData2'); 
        $config2['total_rows']  = $totalRec2; 
        $config2['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
		$this->ajax_pagination2->initialize2($config2); 
		
		$conditions2 = array( 
            'limit' => $this->perPage 
		); 
		
		$data['posts2'] = $this->Welcome_model->getRowsSMA($conditions2); 
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
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
         
		$this->load->view('informasiSMP', $data, false);
	}

	function ajaxPaginationData2(){ 
        // Define offset 
        $page2 = $this->input->post('page'); 
        if(!$page2){ 
            $offset2 = 0; 
        }else{ 
            $offset2 = $page2; 
        } 
         
        // Get record count 
        $conditions2['returnType2'] = 'count2'; 
        $totalRec2 = $this->Welcome_model->getRowsSMA($conditions2); 
         
        // Pagination configuration 
        $config2['target']      = '#dataList2'; 
        $config2['base_url']    = base_url('Welcome/ajaxPaginationData2'); 
        $config2['total_rows']  = $totalRec2; 
        $config2['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->ajax_pagination2->initialize2($config2); 
         
        // Get records 
        $conditions2 = array( 
            'start' => $offset2, 
            'limit' => $this->perPage 
        ); 
        $data['posts2'] = $this->Welcome_model->getRowsSMA($conditions2); 
         
		$this->load->view('informasiSMA', $data, false);
	}
	
	public function sdm(){
		$data = array(); 
		 
        // Get record count 
        $conditions['returnType'] = 'count'; 
		$totalRec = $this->Welcome_model->getDataSDM($conditions);

		// Pagination configuration 
		$config['target']      = '#datalist'; 
		$config['base_url']    = base_url('Welcome/paginationSDM'); 
		$config['total_rows']  = $totalRec; 
		$config['per_page']    = '4'; 
		
		$this->ajax_pagination->initialize($config); 
		 
        // Get records 
        $conditions = array( 
            'limit' => '4'
		);
		
		$data['sdm'] = $this->Welcome_model->getDataSDM($conditions);

		$this->load->view('header');
		$this->load->view('daftarguru', $data);
		$this->load->view('footer');
	}

	public function paginationSDM(){
		// Define offset 
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
		$totalRec = $this->Welcome_model->getDataSDM($conditions); 
		
         
        // Pagination configuration 
        $config['target']      = '#datalist'; 
        $config['base_url']    = base_url('Welcome/paginationSDM'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = '4'; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => '4'
        ); 
        $data['sdm'] = $this->Welcome_model->getDataSDM($conditions); 
         
		$this->load->view('paginationSDM', $data, false);
	}

	public function search(){
		$post = $this->input->post();
		$data['search'] = $this->Welcome_model->search($post['cari'])->result_array();
		$this->load->view('header');
		$this->load->view('searchguru',$data);
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
		$data['fasilitas'] = $this->Welcome_model->fasilitasMedia()->result_array();
		$this->load->view('header');
		$this->load->view('fasilitas', $data);
		$this->load->view('footer');
	}

	public function getData(){
		$data=$this->Welcome_model->getBerita();
		echo json_encode($data);
	}
}
