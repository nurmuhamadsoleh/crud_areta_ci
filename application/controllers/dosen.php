<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('M_dosen');
    }

    public function index(){

        $data['judul']="Tampil Data yang ada";
        $data['tampil']=$this->M_dosen->tampil()->result();
        $this->load->view('dosen/index', $data, FALSE);
    }

    public function input(){
        $data['judul']="Input dosen";
        $this->load->view('dosen/input', $data, FALSE);
    }

    public function save(){
        $id=$this->input->post('nik');
        $nama=$this->input->post('nama_dosen');
        $kode=$this->input->post('kode_dosen');
        $jk=$this->input->post('jenis_kelamin');
        $email=$this->input->post('email');
        $status=$this->input->post('status');

        $data=array(
            'nik'=>$id , 
            'nama_dosen'=>$nama ,
            'kode_dosen'=>$kode ,
            'jenis_kelamin'=>$jk ,
            'email'=>$email ,
            'status'=>$status

        );

        $this->M_dosen->save($data);
        redirect('dosen','refresh');
    }

    public function edit(){
        $id=$this->uri->segment(3);
        $data['edit']=$this->M_dosen->getid($id)->row_array();
        $this->load->view('dosen/edit', $data, FALSE);
    }

    public function update(){
        $id=$this->input->post('nik');
        $nama=$this->input->post('nama_dosen');

        $data=array(
            'nama_dosen'=>$nama
        );

        $this->M_dosen->update($data,$id);
        redirect('dosen','refresh');
    }

    public function delete(){
        $id=$this->uri->segment(3);
        $this->db->where('nik',$id);
        $this->db->delete('dosen');
        redirect('dosen','refresh');
    }
}
?>