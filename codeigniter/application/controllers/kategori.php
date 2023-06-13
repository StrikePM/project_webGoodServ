<?php
    class Kategori extends CI_Controller{
        public function vga(){
            $data['vga'] = $this->model_kategori->data_vga()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('vga', $data);
            $this->load->view('templates/footer');
        }

        public function cpu(){
            $data['cpu'] = $this->model_kategori->data_cpu()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('cpu', $data);
            $this->load->view('templates/footer');
        }

        public function monitor(){
            $data['monitor'] = $this->model_kategori->data_monitor()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('monitor', $data);
            $this->load->view('templates/footer');
        }
    }
?>