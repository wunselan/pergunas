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

            if(array_key_exists("returnType2",$params) && $params['returnType2'] == 'count2'){
                $result = $this->db->count_all_results();
            }else{
                if(array_key_exists("id_berita", $params) || (array_key_exists("returnType2", $params) && $params['returnType2'] == 'single')){
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

        function getDataSDM($params = array()){
            $this->db->select('*');
            $this->db->from('guru');
            $this->db->order_by('jabatan_guru', 'asc');

            if(array_key_exists("where", $params)){
                foreach($params['where'] as $key => $val){
                    $this->db->where($key, $val);
                }
            }

            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                if(array_key_exists("id_guru", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){
                    if(!empty($params['id_guru'])){
                        $this->db->where('id_guru', $params['id_guru']);
                    }
                    $query = $this->db->get();
                    $result = $query->row_array();
                }else{
                    $this->db->order_by('id_guru', 'desc');
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

        public function search($data){
            $query = "SELECT * FROM `guru`
            WHERE `nama_guru`  LIKE '%$data%' ORDER BY `jabatan_guru` asc
            ";

            return $this->db->query($query);

            // return $this->db->get();
        }

        public function fasilitasMedia(){
            $this->db->select('*');
            $this->db->from('fasilitas');
            return $this->db->get();
        }

        public function jmlhSDM(){
            $this->db->select('*');
            $this->db->from('guru');
            return $this->db->get()->num_rows();
        }


    }
?>
