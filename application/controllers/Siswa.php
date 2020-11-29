<?php

class Siswa extends CI_Controller {

	public function index()
	{
		echo "Akses anda di berikan kepada Alien";
	}
	public function datatangan()
	{
		echo "Cicilalang ser";
	}
	public function input()
	{

		$this->load->view('input');
	}
	public function proses()
	{

		$nama=$this->input->post('nama');

		$alamat=$this->input->post('alamat');

		$noHP=$this->input->post('phoneNumber');

		echo "<pre>
		Nama : $nama 
		Alamat : $alamat
		No.HP : $noHP
		</pre> ";
	}
}