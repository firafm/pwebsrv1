<?php

/**
  class untuk sample data dosen
*/
class Daftar_dosen
{

  private $daftardosen;

  /**
    constructor =  inisialisasi object
  */
  function __construct()
  {
    // semua statemen atau perintah dalam function __construct() ini akan
    // dieksekusi otomatis setiap kali object terbentuk dari class ini;

    $this->initData();

  }


  /**
    fungsi pencarian data dosen berdasarkan NIDN
    @param  $nidn - Nomor Induk Dosen Nasional
    @return array data dosen
  */
  public function getDosenByNIDN($nidn)
  {
    $dosen = array();
    foreach ($this->daftardosen as $dsn) {
      if( $dsn['nidn'] == $nidn ) {
        $dosen = $dsn;
        break;
      }
    }
    return $dosen;
  }


  /**
    fungsi inisialisasi data
    otomatis diekseskusi karena dipanggil dari __construct()
  */
  private function initData()
  {
    $this->daftardosen =
    [
      [
        "nidn"=> "0926117101",
        "nama"=> "ARFAN YUNUS",
        "gelar_depan"=> "",
        "gelar_belakang"=> "S.E., M.M.",
      ],
      [
        "nidn" => "0925098502",
        "nama" => "YENI SAHARAENI",
        "gelar_depan" => "",
        "gelar_belakang" => "S.E.,M.M."
      ],
      [
        "nidn" => "0913067003",
        "nama" => "RENNY",
        "gelar_depan" => "",
        "gelar_belakang" => "S.Kom., M.M."
      ],
      [
        "nidn"=> "0931019002",
        "nama"=> "HUSNI ANGRIANI",
        "gelar_depan"=> "",
        "gelar_belakang"=> "S.Kom., M.Cs.",
      ],
      [
        "nidn" => "0929067001",
        "nama" => "MOHAMMAD SOFYAN S THAYF",
        "gelar_depan" => "",
        "gelar_belakang" => "S.T., M.Cs"
      ],
      [
        "nidn" => "0926038801",
        "nama" => "SUKMAWATY",
        "gelar_depan" => "",
        "gelar_belakang" => "S.Pd., M.Pd"
      ],
    ];
  }

}




 ?>
