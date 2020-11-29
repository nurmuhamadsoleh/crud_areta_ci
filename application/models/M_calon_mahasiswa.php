<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon_mahasiswa extends CI_Model{

    public function tampil(){

        $query = $this->db->query('SELECT * FROM calon_mahasiswa AS a 
                                    LEFT JOIN agama AS b 
                                        ON b.id_agama = a.id_agama 
                                            LEFT JOIN jurusan AS c 
                                                ON c.kode_jurusan = a.id_jurusan');
        return $query;
        
    }

    public function save($data){
        $this->db->insert('calon_mahasiswa', $data);
    }

    public function getid($id){
        $param= array ('no_pendaftaran' => $id );
        return $this->db->get_where('calon_mahasiswa',$param);
    }

    public function update($data,$id){

        $this->db->where('no_pendaftaran', $id);
        $this->db->update('calon_mahasiswa', $data);
    }
}
