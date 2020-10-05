<?php
class Kwitansi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kwitansi');
	}
	function index(){
		$this->load->view('v_kwitansi');
	}

	function data_kwitansi(){
		$data=$this->m_kwitansi->kwitansi_list();
		echo json_encode($data);
	}

	function get_kwitansi(){
		$nono=$this->input->get('id');
		$data=$this->m_kwitansi->get_kwitansi_by_no($nono);
		echo json_encode($data);
	}

	function simpan_kwitansi(){
		$nono=$this->input->post('nono');
		$cust=$this->input->post('cust');
		$terbi=$this->input->post('terbi');
		$tangb=$this->input->post('tangb');
		$tangc=$this->input->post('tangc');
		$invo=$this->input->post('invo');
		$tulis=$this->input->post('tulis');
		$creat=$this->input->post('creat');
		$data=$this->m_kwitansi->simpan_kwitansi($nono,$cust,$terbi,$tangb,$tangc,$invo,$tulis,$creat);
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

  
	  public function cetakkwit(){
		ob_start();
		$this->m_kwitansi->cetak_kwitansi();
		$this->load->view('preview', $data);
		$html = ob_get_contents();
			ob_end_clean();
			
		require './assets/html2pdf/autoload.php';
		
		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Cetak Kwitansi.pdf', 'D');
	  }
	

}