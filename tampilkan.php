<!DOCTYPE html>
<html>
  <head>
    <title>Tampilkan Pesan</title>
  </head>
  <body>
    <?php
      // Ambil nilai parameter id dari URL
      $id = $_GET["id"];
      
      // Buka file pesan.txt
      $file = fopen("pesan.txt", "r");
      
      // Cari pesan dengan id yang sesuai dan tampilkan pada halaman
      while (($line = fgets($file)) !== false) {
        $pesanData = explode(",", $line);
        if ($pesanData[0] == $id) {
          echo "<h1>Pesan dengan ID $id:</h1>";
          echo "<p>Pesan Pertama: " . $pesanData[1] . "</p>";
          echo "<p>Pesan Kedua: " . $pesanData[2] . "</p>";
        }
      }
      
      // Tutup file pesan.txt
      fclose($file);
    ?>
  </body>
</html>
