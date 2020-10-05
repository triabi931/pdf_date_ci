<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('v_dashboard');
  }

  function data_user(){
    // function ini hanya boleh diakses oleh admin dan admin
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_user');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function kwitd(){
    // function ini hanya boleh diakses oleh admin dan admin
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('v_kwitd');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function kwitansi(){
    // function ini hanya boleh diakses oleh admin dan user
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->view('v_kwitansi');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function lapor(){
    // function ini hanya boleh diakses oleh admin dan user
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      $this->load->model('LaporModel');
      if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ // Jika filter nya 1 (per tanggal)
            $tanggal_b = $_GET['tanggal_b'];

            $ket = 'Data kwitansi Tanggal '.date('d-m-y', strtotime($tanggal_b));
            $url_cetak = 'lapor/cetak?filter=1&tanggal='.$tanggal_b;
            $kwit = $this->LaporModel->view_by_date($tanggal_b); // Panggil fungsi view_by_date yang ada di KwitansiModel
        }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            $ket = 'Data kwitansi Bulan '.$nama_bulan[$bulan].' '.$tahun;
            $url_cetak = 'lapor/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
            $kwit = $this->LaporModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di KwitansiModel
        }else{ // Jika filter nya 3 (per tahun)
            $tahun = $_GET['tahun'];

            $ket = 'Data kwitansi Tahun '.$tahun;
            $url_cetak = 'lapor/cetak?filter=3&tahun='.$tahun;
            $kwit = $this->LaporModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di KwitansiModel
        }
    }else { // Jika user tidak mengklik tombol tampilkan
        $ket = 'Semua Data kwitansi';
        $url_cetak = 'lapor/cetak';
        $kwit = $this->LaporModel->view_all(); // Panggil fungsi view_all yang ada di KwitansiModel
    }

$data['ket'] = $ket;
$data['url_cetak'] = base_url('index.php/'.$url_cetak);
$data['kwit'] = $kwit;
$data['option_tahun'] = $this->LaporModel->option_tahun();
$this->load->view('v_lapor', $data);
}
    else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
