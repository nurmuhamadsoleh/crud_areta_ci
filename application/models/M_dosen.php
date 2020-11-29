<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model{

    public function tampil(){

        return $this->db->get('dosen');
    }

    public function save($data){
        $this->db->insert('dosen', $data);
    }

    public function getid($id){
        $param= array ('nik' => $id );
        return $this->db->get_where('dosen',$param);
    }

    public function update($data,$id){

        $this->db->where('nik', $id);
        $this->db->update('dosen', $data);
    }
}