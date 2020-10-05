<?php
class Kwitansi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}
	function index(){
		$this->load->view('v_user');
	}

	function data_user(){
		$data=$this->m_user->user_list();
		echo json_encode($data);
	}

	function get_user(){
		$nono=$this->input->get('id');
		$data=$this->m_user->get_user_by_nim($niu);
		echo json_encode($data);
	}

	function simpan_user(){
		$nono=$this->input->post('ni');
		$cust=$this->input->post('nam');
		$terbi=$this->input->post('pas');
		$data=$this->m_kwitansi->simpan_kwitansi($ni,$nam,$pas);
		echo json_encode($data);
	}

	function update_kwitansi(){
		$nono=$this->input->post('nono');
		$cust=$this->input->post('cust');
		$terbi=$this->input->post('terbi');
		$tangb=$this->input->post('tangb');
		$tangc=$this->input->post('tangc');
		$invo=$this->input->post('invo');
		$tulis=$this->input->post('tulis');
		$creat=$this->input->post('creat');
		$data=$this->m_kwitansi->update_kwitansi($nono,$cust,$terbi,$tangb,$tangc,$invo,$tulis,$creat);
		echo json_encode($data);
	}

	function hapus_kwitansi(){
		$nono=$this->input->post('no');
		$data=$this->m_kwitansi->hapus_kwitansi($nono);
		echo json_encode($data);
	}

}