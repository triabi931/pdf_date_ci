<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lapor extends CI_Controller {

	public function __construct(){
		parent::__construct();

        $this->load->model('LaporModel');
	}

	public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tanggal_b = $_GET['tanggal'];

                $ket = 'Data kwitansi Tanggal '.date('d-m-y', strtotime($tanggal_b));
                $kwit = $this->LaporModel->view_by_date($tanggal_b); // Panggil fungsi view_by_date yang ada di KwitansiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data kwitansi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $kwit = $this->LaporModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di KwitansiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data kwitansi Tahun '.$tahun;
                $kwit = $this->LaporModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di KwitansiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data kwitansi';
            $kwit = $this->LaporModel->view_all(); // Panggil fungsi view_all yang ada di KwitansiModel
        }

        $data['ket'] = $ket;
        $data['kwit'] = $kwit;

		ob_start();
		$this->load->view('print', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);
        $pdf->Output('Data kwitansi.pdf', 'D');
        
        
	}
}
