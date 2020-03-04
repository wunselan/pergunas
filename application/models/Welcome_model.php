<?php

    class Welcome_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        function getRows($params = array()){ 
            $this->db->select('*'); 
            $this->db->from('berita'); 
            $this->db->where(array('kategori_berita'=>'SMP'));
             
            if(array_key_exists("where", $params)){ 
                foreach($params['where'] as $key => $val){ 
                    $this->db->where($key, $val); 
                } 
            } 
             
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
                $result = $this->db->count_all_results(); 
            }else{ 
                if(array_key_exists("id_berita", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                    if(!empty($params['id_berita'])){ 
                        $this->db->where('id_berita', $params['id_berita']); 
                    } 
                    $query = $this->db->get();
                    $result = $query->row_array(); 
                }else{ 
                    $this->db->order_by('id_berita', 'desc'); 
                    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit'],$params['start']); 
                    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit']); 
                    } 
                     
                    $query = $this->db->get(); 
                    $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
                } 
            } 
             
            // Return fetched data 
            return $result; 
        } 

        function getRowsSMA($params = array()){ 
            $this->db->select('*'); 
            $this->db->from('berita'); 
            $this->db->where(array('kategori_berita'=>'SMA'));
             
            if(array_key_exists("where", $params)){ 
                foreach($params['where'] as $key => $val){ 
                    $this->db->where($key, $val); 
                } 
            } 
             
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
                $result = $this->db->count_all_results(); 
            }else{ 
                if(array_key_exists("id_berita", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                    if(!empty($params['id_berita'])){ 
                        $this->db->where('id_berita', $params['id_berita']); 
                    } 
                    $query = $this->db->get();
                    $result = $query->row_array(); 
                }else{ 
                    $this->db->order_by('id_berita', 'desc'); 
                    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit'],$params['start']); 
                    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                        $this->db->limit($params['limit']); 
                    } 
                     
                    $query = $this->db->get(); 
                    $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
                } 
            } 
             
            // Return fetched data 
            return $result; 
        } 
        
        public function getBerita()
        {
            $data=$this->db->get('berita');
            return $data->result_array();
        }

        public function getBeritaById($id_berita)
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->where(array('id_berita'=>$id_berita));
            return $this->db->get();
        }
        
        public function getBeritaTerbaru()
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->order_by('id_berita', 'DESC');
            $this->db->limit('3');
            return $this->db->get();
        }

        public function getBeritaSMP($limit=null, $start=null)
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->where(array('kategori_berita'=>'SMP'));
            $this->db->limit($limit, $start);
            return $this->db->get();
        }
        public function getBeritaSMA($limit=null, $start=null)
        {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->where(array('kategori_berita'=>'SMA'));
            $this->db->limit($limit, $start);
            return $this->db->get();
        }
    }
?>