<?php
    class Favorit extends CI_Controller{
        function kacang(){
            $this->load->view('v_data_kacang');
        }
        function semangka(){
            $this->load->view('v_data_semangka');    
        }
        function mangga(){
            $this->load->view('v_data_mangga'); 
        }
        function surabi(){
            $this->load->view('v_data_surabi');
        }
        function biodata($nama,$alamat,$no_hp,$email,$sekolah){

          $data = [
                    'nm'     => $nama,     //array 1
                    'alt'    => $alamat,   //array 2
                    'nh'     => $no_hp,    //array 3
                    'em'     => $email,    //array 4
                    'skl'    => $sekolah,  //array 5
                 ];

        $this->load->view('biodata',$data); 
        }
        function tambahan_data(){
            $this->load->view('form_tambahdata');
        }
        function save(){

         $data['nm']    =   $this->input->post('namaa');
         $data['alt']   =   $this->input->post('alamatt');
         $data['nh']    =   $this->input->post('no_hp');
         $data['em']    =   $this->input->post('emaill');
         $data['skl']   =   $this->input->post('sekolahh');

         $this->load->view('biodata', $data);
        }

        function tampil_data(){
        $this->load->model('M_favorit');
        $data['favorit']=$this->M_favorit->tampil_data()->result();
        $this->load->view('v_tampil_data_favorit',$data);
        }

        function tambah_data(){
            $this->load->view('tambah_data_profile_v');
        }

        function action_tambah_data(){
            $add = [
                    'nama_depan'            =>  $this->input->post('nama_depan'),
                    'nama_belakang'          =>  $this->input->post('nama_belakang'),
                    'tempat_lahir'          =>  $this->input->post('tempat_lahir'),
                    'tanggal_lahir'         =>  $this->input->post('tanggal_lahir'),
                    'jenis_kelamin'         =>  $this->input->post('jenis_kelamin'),
                    'alamat'                =>  $this->input->post('alamat'),
                    'jenjang_pendidikan'    =>  $this->input->post('jenjang_pendidikan'),
                    
                ];

            $this->db->insert('tbl_profile', $add);
            redirect('../favorit/tampil_data');
        }

        function update_data($id){
            $this->load->model('M_favorit');
            $data['favorit']=$this->M_favorit->get_data_by_id($id)->row_array();
            $this->load->view('update_data_profile_v', $data);
        }

        function action_update_data(){
            $id = $this->input->post('id');
            $update = [
                'nama_depan'            =>  $this->input->post('nama_depan'),
                'nama_belakang'         =>  $this->input->post('nama_belakang'),
                'tempat_lahir'          =>  $this->input->post('tempat_lahir'),
                'tanggal_lahir'         =>  $this->input->post('tanggal_lahir'),
                'jenis_kelamin'         =>  $this->input->post('jenis_kelamin'),
                'alamat'                =>  $this->input->post('alamat'),
                'jenjang_pendidikan'    =>  $this->input->post('jenjang_pendidikan'),
            ];

            $update = $this->db->update('tbl_profile',$update, ['id' => $id]);
            redirect('../favorit/tampil_data');
        }
        function hapus_data($id){
            $id = $id;
            $this->db->delete('tbl_profile', ['id' => $id]);
            redirect('../favorit/tampil_data');
        }

    }
    
?>
