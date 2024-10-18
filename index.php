<!DOCTYPE html>
<html>
  <meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
    <title>Custom S.id/bukabentarya</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><script src="https://test.feeldream.repl.co/jsalert.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="https://feeldreams.github.io/main-icon.png"> 
    <link rel="apple-touch-icon" href="https://feeldreams.github.io/main-icon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="index.css">
  <head>
    <title>Custom S.id/bukabentarya</title>
  </head>
  <body>
  <?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $pesanList = file("pesan.txt", FILE_IGNORE_NEW_LINES);
  $pesanData = array();
  foreach($pesanList as $pesanItem) {
    $data = explode("|", $pesanItem);
    if ($data[0] == $id) {
      $pesanData = $data;
      break;
    }
  }
} else {
  $pesanList = file("pesan.txt", FILE_IGNORE_NEW_LINES);
  $maxId = 0;
  foreach($pesanList as $pesanItem) {
    $pesanData = explode("|", $pesanItem);
    $id = (int) $pesanData[0];
    if ($id > $maxId) {
      $maxId = $id;
    }
  }
  $id = $maxId + 1;
  //header("Location: ?id=$id");
  //exit();
}
if(isset($_POST['submit'])){
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

//header('Location: play.php?id=' . $id);
// Tampilkan SweetAlert berhasil disimpan dan pilihan Lihat Hasil atau Salin Link
  echo '<script>
    Swal.fire({
      title: "Berhasil Disimpan!",
      text: "Ingin Lihat Hasil atau Salin Link?",
      icon: "success",
      showCancelButton: true,
      confirmButtonText: "Lihat Hasil",
      cancelButtonText: "Salin Link"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "https://custombukabentarya.feeldream.repl.co/play.php?id=' . $id . '";
      } else {
        const el = document.createElement("textarea");
        el.value = "https://custombukabentarya.feeldream.repl.co/play.php?id=' . $id . '";
        document.body.appendChild(el);
        el.select();
        document.execCommand("copy");
        document.body.removeChild(el);
        
        // Tampilkan SweetAlert berhasil salin link dan pilihan Kirim ke Whatsapp atau Lain Kali
        Swal.fire({
          title: "Berhasil Salin Link!",
          text: "Ingin Kirim ke Whatsapp?",
          icon: "success",
          showCancelButton: true,
          confirmButtonText: "Kirim Whatsapp",
          cancelButtonText: "Lain Kali"
        }).then((result) => {
          if (result.isConfirmed) {
            // Redirect ke Whatsapp dengan link yang sudah disalin
            window.location.href = "https://api.whatsapp.com/send?text=" + encodeURIComponent("https://custombukabentarya.feeldream.repl.co/play.php?id=' . $id . '");
          }
        });
      }
    });
  </script>';
}
?>
  <script>
  function generateUniqueId() {
  // Logika untuk menghasilkan ID unik
  // Misalnya, Anda dapat menggunakan timestamp atau algoritma acak
  // Pastikan ID yang dihasilkan cukup unik untuk kebutuhan Anda

  // Contoh implementasi menggunakan timestamp
  return Date.now().toString();
}

// Cek apakah nilai $id sudah ada di local storage
if (localStorage.getItem('id') === null) {
  // Jika belum ada, buat angka unik dan simpan ke local storage
  var uniqueId = generateUniqueId(); // Fungsi untuk menghasilkan angka unik
  localStorage.setItem('id', uniqueId);
}

// Ambil nilai $id dari local storage
var id = localStorage.getItem('id');
// Cek apakah pengguna sudah berada di halaman target dengan parameter query string 'id'
    if (id && window.location.href.indexOf('https://custombukabentarya.feeldream.repl.co/?id=' + id) !== -1) {
      // Jika sudah berada di halaman target, tidak perlu melakukan pengalihan halaman lagi
      console.log('Pengguna sudah berada di halaman target');
    } else {
      // Cek apakah nilai $id sudah ada di local storage
      if (!id) {
        // Jika belum ada, buat angka unik dan simpan ke local storage
        var uniqueId = generateUniqueId();
        localStorage.setItem('id', uniqueId);
        id = uniqueId; // Set nilai id untuk digunakan dalam pengalihan halaman
      }

      // Alihkan pengguna ke halaman target dengan menyertakan ID sebagai parameter query string
      window.location.replace("https://custombukabentarya.feeldream.repl.co/?id=" + id);
    }
</script>
    
    <div id="bodyblur">
     <!-- Wallpaper --><img src="wp.jpg" id="wallpaper"/>
    </div>
    <form id="form" action="" method="POST">
        <h3>Custom<br>S.id/bukabentarya</h3>
        <p>Edit kata-kata sesuka hatimu!</p>
        <p>TikTok: @feelthisray</p>
        <p><a href="https://instagram.com/zarxdmods" target="_blank">Tanya ke IG</a> — | — <a href="https://api.whatsapp.com/send?phone=6283822455492&text=Izin%20bertanya%20kak%20Custombukabentarya%2C%0A%0A%28Masukkan%20pesan%29" target="_blank">Tanya ke WA</a></p>
      
        <input style="display:none" type="text" id="id" name="id" value="<?php echo $id ?>" readonly>

        <label for="pesan1">Slide Pertama</label>
        <input type="text" placeholder="Hay Kamuu!" id="pesan1" name="pesan1" value="<?php echo isset($pesanData[1]) ? $pesanData[1] : '' ?>">
        <input type="text" placeholder="Aku ada sesuatu nih 🤭" id="pesan2" name="pesan2" value="<?php echo isset($pesanData[2]) ? $pesanData[2] : '' ?>">
        <input type="text" placeholder="Scroll ke bawah ya" id="pesan3" name="pesan3" value="<?php echo isset($pesanData[3]) ? $pesanData[3] : '' ?>">

        <label for="pesan4">Slide Kedua (Pertanyaan)</label>
        <input type="text" placeholder="Kamu Sayang Ga Sama Aku? 🤭❤️" id="pesan4" name="pesan4" value="<?php echo isset($pesanData[4]) ? $pesanData[4] : '' ?>">

        <label>Tombol Mau - Gamau</label>
        <div class="button-container">
          <input style="width:48%" type="text" placeholder="Sayang" id="pesan5" name="pesan5" value="<?php echo isset($pesanData[5]) ? $pesanData[5] : '' ?>">
          <input style="width:48%" type="text" placeholder="Engga" id="pesan6" name="pesan6" value="<?php echo isset($pesanData[6]) ? $pesanData[6] : '' ?>">
        </div>

        <label for="pesan7">Slide Ketiga (Ketika Tombol Sayang di-klik)</label>
        <input type="text" placeholder="Yeayy! Aku juga sayang banget sama kamu 😆❤️" id="pesan7" name="pesan7" value="<?php echo isset($pesanData[7]) ? $pesanData[7] : '' ?>">
        <input type="text" placeholder="Seberapa Sayang Nih? 😄❤️" id="pesan8" name="pesan8" value="<?php echo isset($pesanData[8]) ? $pesanData[8] : '' ?>">

        <label for="pesan9">Slide Keempat</label>
        <input type="text" placeholder="Yeayy! ✨" id="pesan9" name="pesan9" value="<?php echo isset($pesanData[9]) ? $pesanData[9] : '' ?>">
        <input type="text" placeholder="Makasii udah sayang sama aku" id="pesan10" name="pesan10" value="<?php echo isset($pesanData[10]) ? $pesanData[10] : '' ?>">

        <label for="pesan11">Slide Kelima (Pertanyaan 2)</label>
        <input type="text" placeholder="Sekarang kamu kangen engga sama aku? 🥺❤️" id="pesan11" name="pesan11" value="<?php echo isset($pesanData[11]) ? $pesanData[11] : '' ?>">

        <label>Tombol Mau - Gamau</label>
        <div class="button-container">
          <input style="width:47%" type="text" placeholder="Kangen" id="pesan12" name="pesan12" value="<?php echo isset($pesanData[12]) ? $pesanData[12] : '' ?>">
          <input style="width:47%" type="text" placeholder="Engga" id="pesan13" name="pesan13" value="<?php echo isset($pesanData[13]) ? $pesanData[13] : '' ?>">
        </div>

        <label for="pesan14">Slide Terakhir</label>
        <input type="text" placeholder="Hm.. Aku juga kangen banget sama kamu :(" id="pesan14" name="pesan14" value="<?php echo isset($pesanData[14]) ? $pesanData[14] : '' ?>">
        <input type="text" placeholder="I Love You ✨" id="pesan15" name="pesan15" value="<?php echo isset($pesanData[15]) ? $pesanData[15] : '' ?>">
        <textarea placeholder="Terakhir deh 🤭❤️ `Mencintaimu serupa air laut, pasang surut akan selalu ada, namun air laut, tidak pernah berubah rasa <3`" id="pesan16" name="pesan16"><?php echo isset($pesanData[16]) ? str_replace("<br>", "\n", $pesanData[16]) : '' ?></textarea>
        <input type="text" placeholder="Jangan lupa balas pesan ke WhatsApp aku ya! 😆❤️" id="pesan17" name="pesan17" value="<?php echo isset($pesanData[17]) ? $pesanData[17] : '' ?>">

        <button class="inibtn" type="submit" name="submit">Simpan dan Lihat Hasil</button>
      
       <!-- <div class="social" id="bawah">
          <div class="go"><label id="bagikan" for='forShare'><i class="fas fa-share"></i>  Bagikan</label></div>
          <div class="fb"><a id="lihat" href="" target="_blank"><i class="fas fa-paper-plane"></i>  Lihat Hasil</a></div>
        </div> -->

    </form>
    <script>
      //lihat.href="https://customdilihatyuk.feeldream.repl.co/play.php?id=<?php echo $id ?>";
    </script>
    <!--<form id="form" action="simpan_pesan.php" method="POST">
      <label for="id">ID</label>
      <input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
      <label for="pesan1">Pesan Pertama</label>
      <input type="text" id="pesan1" name="pesan1" value="<?php echo isset($pesanData[1]) ? $pesanData[1] : '' ?>">
      <label for="pesan2">Pesan Kedua</label>
      <input type="text" id="pesan2" name="pesan2" value="<?php echo isset($pesanData[2]) ? $pesanData[2] : '' ?>">
      <label for="pesan3">Pesan Ketiga</label>
      <input type="text" id="pesan3" name="pesan3" value="<?php echo isset($pesanData[3]) ? $pesanData[3] : '' ?>">
      <button type="submit">Kirim</button>
    </form>-->
  </body>
</html>