<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$data['view']='page/home_v';
		$this->load->view('layouts/page_layout',$data);
  }
  public function showformPendaftaran()
	{
    $data['view']='page/daftar/formPendaftaran_v';
		$this->load->view('layouts/page_layout',$data);
	}
	public function showformUjian()
	{
    $data['view']='page/daftar/formUjian_v';
		$this->load->view('layouts/page_layout',$data);
	}
	public function showformPernyataan()
	{
    $data['view']='page/daftar/formPernyataan_v';
		$this->load->view('layouts/page_layout',$data);
	}
	public function test()
	{
    return $this->input->post('soal1');
	}
}
