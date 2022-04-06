<?php
    class M_siswa extends CI_model{
        function index(){
          return $this->db->get('tbl_siswa');
        }
    } 
?> 