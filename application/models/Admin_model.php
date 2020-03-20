<?php

    class Admin_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        public function daftarBerita(){
            $this->db->select('*');
            $this->db->from('berita');
            return $this->db->get();
        }

        public function deleteBerita($id_berita){
            return $this->db->delete('berita', array('id_berita'=>$id_berita));
        }

        public function updateBerita($input, $id_berita){
            $this->db->where(array('id_berita'=>$id_berita));
            $this->db->update('berita', $input);
        }

        public function tambahBerita($data){
            return $this->db->insert('berita', $data);
        }

    }

?>