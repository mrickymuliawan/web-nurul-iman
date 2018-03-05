<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['view']='admin/dashboard_v';
		$this->load->view('layouts/admin_layout',$data);
  }
  public function siswa()
	{
    $data['view']='admin/siswa_v';
		$this->load->view('layouts/admin_layout',$data);
	}
}
