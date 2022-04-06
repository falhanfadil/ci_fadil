<?php
    class Siswa extends CI_Controller{
        function index(){
            $this->load->model('M_siswa');
            $data['siswa']=$this->M_siswa->index()->result();
            $this->load->view('v_tampil_siswa',$data);   
        }
    }
?>