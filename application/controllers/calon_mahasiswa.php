<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calon_mahasiswa extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('M_calon_mahasiswa');
		$this->load->model('M_agama');
		$this->load->model('M_jurusan');

    }

    public function index(){

        $data['judul']="Tampil Data yang ada";
        $data['tampil']=$this->M_calon_mahasiswa->tampil()->result();
        $this->load->view('calon_mahasiswa/index', $data, FALSE);
    }

    public function input(){
        $data['judul']="Input calon_mahasiswa";
		$data['jurusan']=$this->M_jurusan->tampil()->result();
		$data['agama']=$this->M_agama->tampil()->result();
        $this->load->view('calon_mahasiswa/input', $data, FALSE);
    }

    public function save(){
        $no=$this->input->post('no_pendaftaran');
        $nama=$this->input->post('nama');
        $tempat=$this->input->post('tempat_lahir');
        $tgl=$this->input->post('tgl_lahir');
        $jk=$this->input->post('jenis_kelamin');
        $alamat=$this->input->post('alamat');
        $no_tlp=$this->input->post('no_telpon');
        $agama=$this->input->post('id_agama');
        $email=$this->input->post('email');
        $jurusan=$this->input->post('id_jurusan');

        $data=array(
            'no_pendaftaran'=>$no , 
            'nama'=>$nama ,
            'tempat_lahir'=>$tempat ,
            'tgl_lahir'=>$tgl ,
            'jenis_kelamin'=>$jk ,
            'alamat'=>$alamat ,
            'no_telpon'=>$no_tlp ,
            'id_agama'=>$agama ,
            'email'=>$email ,
            'id_jurusan'=>$jurusan

        );

        $this->M_calon_mahasiswa->save($data);
        redirect('calon_mahasiswa','refresh');
    }

    public function edit(){
        $id=$this->uri->segment(3);
        $data['edit']=$this->M_calon_mahasiswa->getid($id)->row_array();
		$data['jurusan']=$this->M_jurusan->tampil()->result();
		$data['agama']=$this->M_agama->tampil()->result();
        $this->load->view('calon_mahasiswa/edit', $data, FALSE);
    }

    public function update(){
        $id=$this->input->post('no_pendaftaran');
        $nama=$this->input->post('nama');

        $data=array(
            'nama'=>$nama
        );

        $this->M_calon_mahasiswa->update($data,$id);
        redirect('calon_mahasiswa','refresh');
    }

    public function delete(){
        $id=$this->uri->segment(3);
        $this->db->where('no_pendaftaran',$id);
        $this->db->delete('calon_mahasiswa');
        redirect('calon_mahasiswa','refresh');
    }
}
?>
