<?php
require_once("program03.data.php");
?>
<!DOCTYPE html>
<html lang="en"  dir="ltr" >
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.css">
<title>Program 03</title>
</head>
<body>
  <div class="container">
  <div class="row">

  <div class="col6">
    <table>
    <thead>
    <tr>
    <th>NIM</th>
    <th>Mahasiswa</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $mhs){
    $link = $_SERVER['PHP_SELF'] . '?nim=' . $mhs['nim'];
    if ( isset( $_GET['pa'] ) ) {
    if( $mhs['dosen_pa']['nidn'] == $_GET['pa'] ){
    ?>
  <tr>
  <td class="text-center">
  <a href="<?= $link ?>"><?= $mhs['nim'] ?></a>
  </td>
  <td>
  <a href="<?= $link ?>"><?= $mhs['nama'] ?></a>
  </td>
  </tr>
<?php }}
else { ?>
    <tr>
    <td class="text-center">
    <a href="<?= $link ?>"><?= $mhs['nim'] ?></a>
    </td>
    <td>
    <a href="<?= $link ?>"><?= $mhs['nama'] ?></a>
    </td>
    </tr>
  <?php }} ?>
    </tbody>
    </table>
    </div>

  <div class="col6">
<?php
if ( isset( $_GET['nim'] ) ) {
foreach ($mahasiswa as $findmhs) {
if( $findmhs['nim'] == $_GET['nim'] ){
$find = $findmhs;
break;
}
}
if( $find['lp'] == 'L'){
$lp = 'Laki-laki' ;
} else{$lp = 'Perempuan'; }
?>

<table>
<tr>
<td class="field">N I M:</td>
<td class="data"><?= $find['nim']?></td>
</tr>
<tr>
<td class="field">Nama Lengkap:</td>
<td class="data"><?= $find['nama']?></td>
</tr>
<tr>
<td class="field">Jenis kelamin:</td>
<td class="data"><?= $lp ?></td>
</tr>
<tr>
<td class="field">E-mail:</td>
<td class="data"><?= $find['email'] ?></td>
</tr>
<tr>
<td class="field">Tanggal masuk:</td>
<td class="data"><?=$find['tanggal_masuk'] = date("j F Y") ?></td>
</tr>
<tr>
<td class="field">Pembimbing akademik:</td>
<td class="data">
  <a href="<?= $SERVER['PHP_SELF']. ' ?pa='. $find['dosen_pa']['nidn']?>"><?= $find['dosen_pa']['nama'].", ".$find['dosen_pa']['gelar_depan']. $find['dosen_pa']['gelar_belakang'] ?>
</td>
</tr>
</table>
<?php
 }
 ?>
</div>
  </div>
  </div>

</body>
</html>
