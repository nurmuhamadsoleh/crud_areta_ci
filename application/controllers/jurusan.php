<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('M_jurusan');
    }

    public function index(){

        $data['judul']="Tampil Data Jurusan";
        $data['tampil']=$this->M_jurusan->tampil()->result();
        $this->load->view('jurusan/index', $data, FALSE);
    }

    public function input(){
        $data['judul']="Input Jurusan Baru";
        $this->load->view('jurusan/input', $data, FALSE);
    }

    public function save(){
        $kode=$this->input->post('kode_jurusan');
        $nama=$this->input->post('nama_jurusan');

        $data=array(
            'kode_jurusan'=>$kode , 
            'nama_jurusan'=>$nama
        );

        $this->M_jurusan->save($data);
        redirect('jurusan','refresh');
    }

    public function edit(){
        $id=$this->uri->segment(3);
        $data['edit']=$this->M_jurusan->getid($id)->row_array();
        $this->load->view('jurusan/edit', $data, FALSE);
    }

    public function update(){
        $kode=$this->input->post('kode_jurusan');
        $nama=$this->input->post('nama_jurusan');

        $data=array(
            'nama_jurusan'=>$nama
        );

        $this->M_jurusan->update($data,$kode);
        redirect('jurusan','refresh');
    }

    public function delete(){
        $id=$this->uri->segment(3);
        $this->db->where('kode_jurusan',$id);
        $this->db->delete('jurusan');
        redirect('jurusan','refresh');
    }
}
?>