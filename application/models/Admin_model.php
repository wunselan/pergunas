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

        public function daftarFasilitas(){
            $this->db->select('*');
            $this->db->from('fasilitas');
            return $this->db->get();
        }

        public function deleteBerita($id_berita){
            return $this->db->delete('berita', array('id_berita'=>$id_berita));
        }

        public function deleteFasilitas($id_fasilitas){
            return $this->db->delete('fasilitas', array('id_fasilitas'=>$id_fasilitas));
        }

        public function updateBerita($input, $id_berita){
            $this->db->where(array('id_berita'=>$id_berita));
            $this->db->update('berita', $input);
        }

        public function updateFasilitas($input, $id_fasilitas){
            $this->db->where(array('id_fasilitas'=>$id_fasilitas));
            $this->db->update('fasilitas', $input);
        }

        public function tambahBerita($data){
            return $this->db->insert('berita', $data);
        }

        public function tambahFasilitas($data){
            return $this->db->insert('fasilitas', $data);
        }

        public function daftarGuru(){
          $this->db->select('*');
          $this->db->from('guru');
          return $this->db->get();
        }

        public function deleteGuru($id_guru){
          return $this->db->delete('guru', array('id_guru'=>$id_guru));
        }

        public function updateGuru($input, $id_guru){
            $this->db->where(array('id_guru'=>$id_guru));
            $this->db->update('guru', $input);
        }

        public function tambahGuru($data){
            return $this->db->insert('guru', $data);
        }

        public function beritaById(){
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->order_by('id_berita DESC');
            $this->db->limit('1');
            return $this->db->get();
        }

    }

?>
