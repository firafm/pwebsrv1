<?php
/**
class model data Dosen
*/
  class Dosen
{
  public $nidn;
  public $nama;
  public $gelar_depan;
  public $gelar_belakang;
  public function Dosen($nidn)
{
  $this->nidn = $nidn;
  $this->initDosen();
}
  public function namaLengkap()
{
  $namalengkap = $this->gelar_depan .' '. $this->nama ;
  if( $this->gelar_belakang != '' ){
    $namalengkap .= ', '.$this->gelar_belakang;
}
  return $namalengkap;
}
  private function initDosen()
  {
    $listdsn = new Daftar_dosen();
    $dsn = $listdsn->getDosenByNIDN($this->nidn);
    $this->nama = $dsn['nama'];
    $this->gelar_depan = $dsn['gelar_depan'];
    $this->gelar_belakang = $dsn['gelar_belakang'];
}



} //end class (pastikan ini paling bawah)
?>
