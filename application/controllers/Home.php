<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['view']='page/home_v';
		$this->load->view('layouts/page_layout',$data);
  }
  public function siswa()
	{
    $data['view']='page/siswa_v';
		$this->load->view('layouts/page_layout',$data);
	}
}
