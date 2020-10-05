<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class terbilang extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kwitansi');
                $this->load->helper('terbilang');
	}
 
	function index()
	{
        $data['user'] = $this->m_kwitansi->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
}