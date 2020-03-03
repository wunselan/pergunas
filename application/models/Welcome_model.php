<?php

    class Welcome_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }
        
        public function getBerita()
        {
            return $this->db->get('berita');
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