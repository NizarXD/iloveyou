<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $pesanList = file('pesan.txt');
  foreach ($pesanList as $pesanItem) {
    $pesanData = explode('|', $pesanItem);
    if ($pesanData[0] == $id) {
      $pesan1 = $pesanData[1];
      $pesan2 = $pesanData[2];
      break;
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tampilkan Pesan</title>
  </head>
  <body>
    <div id='pergeseran'>
      <p><b><span id="pesanPertama"><?php echo $pesan1; ?></span></b></p>
      <p><b><span id="pesanKedua"><?php echo $pesan2; ?></span></b></p>
    </div>
  </body>
</html>
