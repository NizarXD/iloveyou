<!DOCTYPE html>
<html><meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  <link rel="icon" type="image/svg+xml" href="https://feeldreams.github.io/main-icon.png"> 
  <link rel="apple-touch-icon" href="https://feeldreams.github.io/main-icon.png">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script><!--<link href="https://feeldreams.github.io/maukahkamu/style.css" rel="stylesheet" type="text/css" />-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="style.css">
  <head>
    <title>Untukmu - S.id/bukabentarya</title>
  </head>
  <body>
    <div class="overlay">
     <div class="loading-message">Hai kamu!<br>Tunggu dulu ya..<br><br>Ga lama kok! 😆</div>
   </div>

   <audio src="https://feeldreams.github.io/maukahkamu/seandainya.mp3" id="linkmp3" class="sembunyi"></audio>
   
   <section class="first">
       <div class="wp"><img src="https://feeldreams.github.io/maukahkamu/prem.jpg"/></div>
       <img id="first_stiker" class="stiker fade-in" src="https://feeldreams.github.io/bunga.gif"/>
       <h1 id="sc1_h1" class="title">Hay Kamuu!</h1>
       <p id="sc1_p1" class="flip">Aku ada sesuatu nih 🤭</p>
       <p id="sc1_p2" class="slide-up"><i>Scroll ke bawah ya :)</i></p>
  </section>
  
  <section>
      <div class="wp"><img src="https://feeldreams.github.io/maukahkamu/wptujuh.jpg"/></div>
      <img class="stiker fade-in" src="https://feeldreams.github.io/pusn.gif"/>
      <h3 id="sc2_h3" class="title">Kamu Sayang Ga<br>Sama Aku? 🤭❤️</h3>
      <div id="Tombol">
       <a id="By" onClick="fungsimau()">Sayang</a>
       <a id="Bn" onClick="btn='Bn';fungsibaru(btn)">Engga</a>
     </div>
     <!-- Pesan Ditolak -->
     <div class="sembunyi">
       <img id="stikerditolak" src="https://feeldreams.github.io/ywdh.gif"/>
       <p id="kataditolak">Yaahh:( yaudah deh🙁</p>
     </div>
  </section>
  
  <section>
  	<div class="wp"><img src="https://feeldreams.github.io/maukahkamu/wptiga.jpg"/></div>
      <img class="stiker fade-in" src="https://feeldreams.github.io/cilukba.gif"/>
      <h3 id="textsec3" class="anm title">Yeayy! Aku juga sayang<br>banget sama kamu 😆❤️</h3>
      <h3 id="textsec3b" class="anm">Seberapa Sayang Nih? 😄❤️</h3>
      <div class="kolomrange">
       	<div class="inirange">
           <input type="range" min="1" max="100" value="25"/>
           </div>
           <div class="inivalue"></div>
       </div>
  </section>
  
  <section>
  	<div class="wp"><img src="https://feeldreams.github.io/maukahkamu/wpempat.jpg"/></div>
      <img class="stiker fade-in" src="https://feeldreams.github.io/bwa2.gif"/>
      <h2 id="sc4_h2" class="title"><i>Yeayy!</i> ✨</h2>
      <p id="teksnimasi">Makasii udah sayang<br>sama aku </p>
  </section>
  
  <section>
      <div class="wp"><img src="https://feeldreams.github.io/maukahkamu/wplapan.jpg"/></div>
      <img class="stiker fade-in" src="https://feeldreams.github.io/smprt.gif"/>
      <h3 id="sc5_h3" class="title">Sekarang kamu kangen<br>engga sama aku? 🥺❤️</h3>
      <div id="Tombol2">
       <a id="By2" onClick="fungsimau2()">Kangen</a>
       <a id="Bn2" onClick="btn='Bn2';fungsibaru(btn)">Engga</a>
      </div>
      <!-- Pesan Ditolak -->
      <div class="sembunyi">
        <img id="stikerditolak2" src="https://feeldreams.github.io/ywdh.gif"/>
        <p id="kataditolak2">Yaahh ko engga sih 🥺</p>
      </div>
  </section>
  
  <section id="iniakhir">
  	<div class="wp"><img src="https://feeldreams.github.io/maukahkamu/wplima.jpg"/></div>
      <img id="stikerakhir" class="stiker stakhir fade-in" src="https://feeldreams.github.io/g5.gif"/>
      <img id="stikerakhir2" class="stakhir" style="display:none" src="https://feeldreams.github.io/emawh.gif"/>
      <h1 id="judulakhir">Hm.. Aku juga kangen<br>banget sama kamu :(</h1>
      <p id="kalimatakhir">Terakhir deh 🤭❤️<br><br>`Mencintaimu serupa air laut,<br>pasang surut akan selalu ada,<br>namun air laut, tidak pernah<br>berubah rasa <3`</p>
      <p id="palingakhir">Jangan lupa balas pesan<br>ke WhatsApp aku ya! 😆❤️</p>
      <div id="TombolWA">
       <a onClick="menuju()">Balas 💌</a>
     </div>
  </section>
  
  <div id="initom" class="menu">
  <a class='tombol' onclick="tes()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/> </svg>
  </a>
  </div>

        <style>
    svg{vertical-align: middle;width: 22px;height: 22px;fill: #fff}
    .tomKirim{position: fixed;background-color: #4dc247;bottom: 30px;right: 30px;border-radius: 50px;z-index: 999;overflow: hidden;display: flex;align-items: center;justify-content: center;width: 45px;height: 45px;-webkit-transition: all .2s ease-out;transition: all .2s ease-out}
    .tomKirim svg{margin: auto;fill: #fff} .tomKirim:hover{transform: scale(.8)}
  </style>
  <script></script>
  
  <a id="tomWA" class='tomKirim' href=''>
    <svg class='svg-1' viewBox='0 0 32 32'><g><path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path><path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path></g></svg>
  </a>

  <div class='sticky-ad' id='sticky-ad'>
 <div class='adB'><a rel="dofollow" href='https://bit.ly/htmlfeeldream'>Lihat Script HTML Lainnya di Sini!</a></div>
<button aria-label='Close this ad' class='sticky-ad-close-button' onclick='hilangkan();'/>
</div>

<script>
teksjudulakhir2 = "I Love You ✨";
pesanWA = "Iya aku sayang kamu "; // Misal 100%!
function fungsibaru(btn) {
  var tombol = document.getElementById("" + btn);
  var tombolParent = tombol.parentNode;
  
  var tombolPosisiX = Math.floor(Math.random() * 50) + 1; // Posisi X acak antara 1 dan 50
  var tombolPosisiY = Math.floor(Math.random() * 75) + 1; // Posisi Y acak antara 1 dan 50
  var rotasiAcak = Math.floor(Math.random() * 360); // Rotasi acak antara 0 dan 359

  // Mengatur posisi baru tombol
  tombol.style.position = "relative";
  tombol.style.left = tombolPosisiX + "px";
  tombol.style.top = tombolPosisiY + "px";
  tombol.style.transform = "rotate(" + rotasiAcak + "deg)";
  tombolParent.appendChild(tombol);
  
  jumlahKlik++;
  }
////////

function tunjukkan(){document.getElementById("sticky-ad").style = "bottom: 0px";}
  function hilangkan() {document.getElementById("sticky-ad").style = "bottom: -130px";}
  
  tunjukkan();
const body = document.querySelector("body"); const swalst = Swal.mixin({timer: 2777, allowOutsideClick: false, showConfirmButton: false, timerProgressBar: true, imageHeight: 90,}); initom.style="opacity:0;bottom:0;transition:none"; audio = new Audio('' + linkmp3.src); function berjatuhan() {const heart = document.createElement("div"); heart.className = "fas fa-heart"; heart.style.left = (Math.random() * 90)+"vw"; heart.style.animationDuration = (Math.random()*3)+2+"s"; body.appendChild(heart);} setInterval(function name(params) {var heartArr = document.querySelectorAll(".fa-heart"); if (heartArr.length > 100) {heartArr[0].remove()}},100);
</script>
        
    <?php
      // Ambil nilai parameter id dari URL
      $id = $_GET["id"];
    ?><script>tomWA.href="https://api.whatsapp.com/send?phone=&text=https%3A%2F%2Fcustombukabentarya.feeldream.repl.co%2Fplay.php%3Fid%3D<?php echo $id ?>";</script><?php
      
      // Buka file pesan.txt
      $file = fopen("pesan.txt", "r");
      
      // Cari pesan dengan id yang sesuai dan tampilkan pada halaman
      while (($line = fgets($file)) !== false) {
        $pesanData = explode("|", $line);
        if ($pesanData[0] == $id) {
          ?>
          <script>
            <?php if (!empty($pesanData[1])) { ?>
            sc1_h1.innerHTML = "<?php echo $pesanData[1] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[2])) { ?>
            sc1_p1.innerHTML = "<?php echo $pesanData[2] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[3])) { ?>
            sc1_p2.innerHTML = "<?php echo $pesanData[3] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[4])) { ?>
            sc2_h3.innerHTML = "<?php echo $pesanData[4] ?>"; // Pertanyaan
            <?php } ?>
            
            <?php if (!empty($pesanData[5])) { ?>
            By.innerHTML = "<?php echo $pesanData[5] ?>"; // Sayang
            <?php } ?>
            
            <?php if (!empty($pesanData[6])) { ?>
            Bn.innerHTML = "<?php echo $pesanData[6] ?>"; // Engga
            <?php } ?>
            
            <?php if (!empty($pesanData[7])) { ?>
            textsec3.innerHTML = "<?php echo $pesanData[7] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[8])) { ?>
            textsec3b.innerHTML = "<?php echo $pesanData[8] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[9])) { ?>
            sc4_h2.innerHTML = "<?php echo $pesanData[9] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[10])) { ?>
            teksnimasi.innerHTML = "<?php echo $pesanData[10] ?>"; // Makasi udah sayang
            <?php } ?>
            
            <?php if (!empty($pesanData[11])) { ?>
            sc5_h3.innerHTML = "<?php echo $pesanData[11] ?>"; // Sekarang kamu kangen
            <?php } ?>
            
            <?php if (!empty($pesanData[12])) { ?>
            By2.innerHTML = "<?php echo $pesanData[12] ?>"; // Kangen
            <?php } ?>
            
            <?php if (!empty($pesanData[13])) { ?>
            Bn2.innerHTML = "<?php echo $pesanData[13] ?>"; // Engga
            <?php } ?>
            
            <?php if (!empty($pesanData[14])) { ?>
            judulakhir.innerHTML = "<?php echo $pesanData[14] ?>"; // Hm.. Aku juga kangen
            <?php } ?>
            
            <?php if (!empty($pesanData[15])) { ?>
            teksjudulakhir2 = "<?php echo $pesanData[15] ?>"; // I Love You
            <?php } ?>
            
            <?php if (!empty($pesanData[16])) { ?>
            kalimatakhir.innerHTML = "<?php echo $pesanData[16] ?>"; // Terakhir deh
            <?php } ?>
            
            <?php if (!empty($pesanData[17])) { ?>
            palingakhir.innerHTML = "<?php echo $pesanData[17] ?>"; // Jangan lupa balas 
            <?php } ?>
          </script>
          <script src="script.js"></script>
          <?php
        }
      }
      
      // Tutup file pesan.txt
      fclose($file);
    ?>
  </body>
</html>
