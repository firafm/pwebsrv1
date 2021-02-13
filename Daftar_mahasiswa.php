<?php

/**
  class untuk sample data mahasiswa
*/
class Daftar_mahasiswa
{
  private $daftarmahasiswa;

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
    fungsi pencarian data satu mahasiswa berdasarkan NIM
    @param  $nim - Nomor Induk Mahasiswa
    @return array data mahasiswa
  */
  public function getMahasiswaByNIM($nim)
  {
    $mahasiswa = array();
    foreach ($this->daftarmahasiswa as $mhs) {
      if( $mhs['nim'] == $nim ) {
        $mahasiswa = $mhs;
        break;
      }
    }
    return $mahasiswa;
  }

  /**
    fungsi pencarian daftar mahasiswa berdasarkan NIDN Dosen PA
    @param  $nidn_pa    Nomor Induk Dosen PA
    @return array dari objek mahasiswa dari PA yang sama
  */
  public function getMahasiswaByPA($nidn_pa)
  {
    $mahasiswa = array();
    foreach ($this->daftarmahasiswa as $mhs) {
      if( $mhs['dosen_pa'] == $nidn_pa ) {
        $mahasiswa[] = new Mahasiswa( $mhs['nim'] );  //objek mahasiswa dalam array $mahasiswa
      }
    }
    return $mahasiswa;
  }

  /**
    fungsi inisialisasi data
    otomatis diekseskusi karena dipanggil dari __construct()
  */
  private function initData()
  {
    // pengisian data ke dalam variabel $daftarmahasiswa
    $this->daftarmahasiswa =
    [
        [
          "nim"=> "51018001",
          "nama"=> "ALBERTUS MARCO NOVELIUM THEOVANUS",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "albertusmarco_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018002",
          "nama"=> "BEATRICE INDRY WAHYUNI",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "beatriceindry_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018003",
          "nama"=> "CALVINA WUYSAN",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "calvinawuysan_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018004",
          "nama"=> "CHARLOS VELIX GUNAWAN",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "charlosvelix_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018005",
          "nama"=> "EVELYN WINNY THODY",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "evelynwinny_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018006",
          "nama"=> "FAUSTINE WILBERT WIJAYA",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "faustinewilbert_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018008",
          "nama"=> "FILBERT ALEXANDER TEJOKUSUMA",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "filbertalexander_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0931019002"
        ],
        [
          "nim"=> "51018009",
          "nama"=> "FIRA MULIA",
          "lp"=> "P",
          "status"=> "A",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "firamulia_19@kharisma.ac.id",
          "dosen_pa"=> "0926038801"
        ],
        [
          "nim"=> "51018010",
          "nama"=> "FITRI PUSPITASARI",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "fitripuspitasari_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926038801"
        ],
        [
          "nim"=> "51018011",
          "nama"=> "HEIDI ANGELA TENGRIANO",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "heidiangela_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926038801"
        ],
        [
          "nim"=> "51018012",
          "nama"=> "HENRY LIANTO",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "henrylianto_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926038801"
        ],
        [
          "nim"=> "51018013",
          "nama"=> "JERVIN DESCRATES KONTESSA",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "jervindescrates_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018014",
          "nama"=> "NATASHA MAYA DJAJA",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "natashamaya_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018015",
          "nama"=> "NUR ADREY NATASYIA ADMUNADY",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "nuradrey_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018016",
          "nama"=> "PHILIPS CALVIN KOSNO",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "philipscalvin_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018017",
          "nama"=> "PRICILIA ANGELIANG",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "priciliaangeliang_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018018",
          "nama"=> "RAHMAT ALTAMAZI",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "rahmataltamazi_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018019",
          "nama"=> "RONNY JUBHARI PHIE JOARNO",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "ronnyjubhari_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018020",
          "nama"=> "THALENTA CRISTY",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "thalentacristy_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018021",
          "nama"=> "WILLIAM CHANDRA",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "williamchandra_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018022",
          "nama"=> "JORDI PANGERAN",
          "lp"=> "L",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "jordipangeran_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018023",
          "nama"=> "MEILIANA ADEPUTRI SHIANTO",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "meilianaadeputri_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018024",
          "nama"=> "NURUL FITRAH",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "nurulfitrah_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ],
        [
          "nim"=> "51018025",
          "nama"=> "CICILIA MARLOANTO",
          "lp"=> "P",
          "tanggal_masuk"=> "2018-08-27",
          "email"=> "ciciliamarloanto_19@kharisma.ac.id",
          "status"=> "A",
          "dosen_pa"=> "0926117101"
        ]
    ];

  }




}


 ?>
