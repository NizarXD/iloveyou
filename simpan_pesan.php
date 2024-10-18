<?php
$id = $_POST['id'];
$pesan1 = $_POST['pesan1'];
$pesan2 = $_POST['pesan2'];
$pesan3 = $_POST['pesan3'];
$pesan4 = $_POST['pesan4']; // Pertanyaan pertama
$pesan5 = $_POST['pesan5']; // Tombol Sayang
$pesan6 = $_POST['pesan6']; // Tombol Engga
$pesan7 = $_POST['pesan7'];
$pesan8 = $_POST['pesan8'];
$pesan9 = $_POST['pesan9']; // Yeayy
$pesan10 = $_POST['pesan10']; // Makasi udah sayang sama aku 100%
$pesan11 = $_POST['pesan11']; // Sekarang kamu kangen
$pesan12 = $_POST['pesan12']; // Kangen
$pesan13 = $_POST['pesan13']; // Engga
$pesan14 = $_POST['pesan14']; // Hm.. Aku juga kangen
$pesan15 = $_POST['pesan15']; // I Love You
$pesan16 = $_POST['pesan16']; // Terakhir deh
$pesan17 = $_POST['pesan17']; // Jangan lupa balas
$pesanTerakhir = ".";
$pesan16 = str_replace(array("\r\n", "\n"), "<br>", $pesan16);
$pesan16 = str_replace("|", "", $pesan16);

$pesan1 = str_replace('"', '', $_POST['pesan1']);
$pesan2 = str_replace('"', '', $_POST['pesan2']);
$pesan3 = str_replace('"', '', $_POST['pesan3']);
$pesan4 = str_replace('"', '', $_POST['pesan4']);
$pesan5 = str_replace('"', '', $_POST['pesan5']);
$pesan6 = str_replace('"', '', $_POST['pesan6']);
$pesan7 = str_replace('"', '', $_POST['pesan7']);
$pesan8 = str_replace('"', '', $_POST['pesan8']);
$pesan9 = str_replace('"', '', $_POST['pesan9']);
$pesan10 = str_replace('"', '', $_POST['pesan10']);
$pesan11 = str_replace('"', '', $_POST['pesan11']);
$pesan12 = str_replace('"', '', $_POST['pesan12']);
$pesan13 = str_replace('"', '', $_POST['pesan13']);
$pesan14 = str_replace('"', '', $_POST['pesan14']);
$pesan15 = str_replace('"', '', $_POST['pesan15']);
$pesan16 = str_replace('"', '', $pesan16);
$pesan17 = str_replace('"', '', $_POST['pesan17']);
// Cek apakah inputan pesan kosong
/*if (empty($pesan1) || empty($pesan2) || empty($pesan3)) {
  echo "Pesan tidak boleh kosong.";
  exit;
}*/

// Validasi inputan pesan hanya berisi huruf, angka, spasi, koma, dan titik
/*if (!preg_match('/^[a-zA-Z0-9 ,.]*$/', $pesan1) || !preg_match('/^[a-zA-Z0-9 ,.]*$/', $pesan2) || !preg_match('/^[a-zA-Z0-9 ,.]*$/', $pesan3)) {
  echo "Pesan hanya boleh berisi huruf, angka, spasi, koma, dan titik.";
  exit;
}*/

$file = 'pesan.txt';
$handle = fopen($file, 'r');

// Cek apakah file pesan.txt dapat dibuka
if ($handle === false) {
  echo "Terjadi kesalahan saat membuka file pesan.txt";
  exit;
}

$newData = $id . '|' . $pesan1 . '|' . $pesan2 . '|' . $pesan3 . '|' . $pesan4 . '|' . $pesan5 . '|' . $pesan6 . '|' . $pesan7 . '|' . $pesan8 . '|' . $pesan9 . '|' . $pesan10 . '|' . $pesan11 . '|' . $pesan12 . '|' . $pesan13 . '|' . $pesan14 . '|' . $pesan15 . '|' . $pesan16 . '|' . $pesan17 . '|' . $pesanTerakhir;

$dataFound = false;
$output = '';

// Cek setiap baris pada file pesan.txt
while (($line = fgets($handle)) !== false) {
  $pesanData = explode("|", $line);
  $currentId = (int) $pesanData[0];

  // Jika id pada baris saat ini sama dengan id yang diinputkan
  if ($currentId == $id) {
    // Tandai bahwa data sudah ditemukan
    $dataFound = true;
    // Ganti data lama dengan data baru
    $line = $newData . "\n";
  }

  $output .= $line;
}

fclose($handle);

// Jika data belum ditemukan, tambahkan data baru ke dalam file
if (!$dataFound) {
  $output .= $newData . "\n";
}

// Simpan data ke dalam file pesan.txt
$handle = fopen($file, 'w');
fwrite($handle, $output);
fclose($handle);

header('Location: play.php?id=' . $id);
exit;
?>
