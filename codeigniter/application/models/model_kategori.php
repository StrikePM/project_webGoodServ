<?php
    class Model_kategori extends CI_Model{
        public function data_vga(){
            return $this->db->get_where('tb_barang', array('kategori' => 'vga'));
        }

        public function data_cpu(){
            return $this->db->get_where('tb_barang', array('kategori' => 'cpu'));
        }

        public function data_monitor(){
            return $this->db->get_where('tb_barang', array('kategori' => 'monitor'));
        }
    }
?>