<?php
session_start();
require_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>


    <div class="nav" style="z-index: 1093;">
        <ul>
            <li style="text-decoration: none;"> <img src="img/head.png" alt="">
                <ol class="isi">

                    <li> <a href="index.html"><i class="fas fa-home"></i> Beranda</a> </li>
                    <li> <a href="#tentang"><i class="fas fa-school"></i> Tentang</a> </li>
                    <li> <a href="#layanan"><i class="fas fa-home"></i> Layanan</a> </li>
                    <li> <a href="#materi"><i class="fas fa-home"></i> Materi</a> </li>
                    <li> <a href="#dampak"><i class="fas fa-home"></i> Dampak</a> </li>
                    <li> <a href="#biaya"><i class="fas fa-money"></i> Biaya</a> </li>
                    <li> <a href="#konsultasi"><i class="fas fa-home"></i> Konsultasi</a></li>
                    <li> <a href="logout.php">Logout</a></li>
                </ol>
            </li>
        </ul>
    </div>


    <div id="beranda"  style="position: relative;">

        <div class="gambar">
            <div class="sadow">
                <div class="tekskusu">
                    <h1>Natar Dampingi,<br>
                        UMKM Berkembang. </h1>
                    <p>Natar merupakan platform yang memberi Wirausaha Pemula akses mendapatkan pendampingan untuk
                        mengidentifikasi posisi bisnisnya sehingga dapat berkembang.
                    </p>
                </div>
            </div>
        </div>

        <div class="select">
            <select name="format" id="format">
                <option selected disabled>Kategori</option>
                <option value="pdf">PDF</option>
                <option value="txt">txt</option>
                <option value="epub">ePub</option>
                <option value="fb2">fb2</option>
                <option value="mobi">mobi</option>
            </select>
        </div>

        <div class="pilih">
            <select name="format" id="format">
                <option selected disabled>Materi</option>
                <option value="pdf">PDF</option>
                <option value="txt">txt</option>
                <option value="epub">ePub</option>
                <option value="fb2">fb2</option>
                <option value="mobi">mobi</option>
            </select>
        </div>

        <div class="box">
            <a href="#">Langsung Dampingi</a>
        </div>
    </div>


    <div id="tentang" style="position: relative;">
        <div class="content">
            <p style="margin-bottom: 0px;">Kenapa Natar Harus
                Jadi Pendampingmu?</p>
            <h1>Natar merupakan platform yang memberi Wirausaha Pemula akses mendapatkan pendampingan untuk
                mengidentifikasi posisi bisnisnya sehingga dapat berkembang.
            </h1>
        </div>

        <div class="square"></div>
        <div class="oval"></div>
        <div class="kotak"></div>
        <div class="bulet"></div>
        <div class="circle"></div>
        <div class="ring"></div>
        <div class="telub"></div>
        <div class="buled"></div>
    </div>

    <div id="tentang" style="position: relative;">
        <div class="judul">
            <p>Memberimu Segenap <br>Pendampingan</p>
        </div>
        
        <div class="img7">
            <img src="img/banner.jpeg" alt="">
           
        </div>
        <div class="img8">
            <img src="img/banner.jpeg" alt="">
            
        </div>
        <div class="img9">
            <img src="img/banner.jpeg" alt="">
            
        </div>
    
        <div class="konten">
            <h1>Natar merupakan platform yang memberi Wirausaha Pemula akses mendapatkan pendampingan untuk mengidentifikasi posisi bisnisnya sehingga dapat berkembang.
            </h1>
            <div class="btn">
                <a href="#">Ambil Sekarang</a>
            </div>
        </div>
    
    </div>
      
    <div id="layanan" style="position: relative;">
        <div id="layanan">

            <div class="banner">
                <img src="img/banner.jpeg" alt="">
        </div>
    
        <div class="conten">
            <p>Layanan Utama</p>
          <h1>Your content goes here. Edit or remove this text inline or in the module this text inline or in the module Content settings. You  can also style Your content goes here. Edit or remove this text inline or i. </h1>
          
        <div class="bc">
            
        </div>
        <div class="ba">
            <h1>Mengarahkan pelaku usaha mikro pemula untuk bisa business matching antara peserta, peserta dengan partner Parakarsa, dan peserta dengan Parakarsa.</h1>
        </div>
        
        <div class="bh">
            
        </div>
        <div class="bd">
            <h2>Mengarahkan pelaku usaha mikro pemula untuk bisa business matching antara peserta, peserta dengan partner Parakarsa, dan peserta dengan Parakarsa.</h2>
        </div>
    
        <div class="bk">    
        
            <h3>Mengarahkan pelaku usaha mikro pemula untuk bisa business matching antara peserta, peserta dengan partner Parakarsa, dan peserta dengan Parakarsa.</h3>
        
    </div>

    <div id="materi" style="position: relative;">
        <div class="atas">
            <p>materi</p>
        </div>
        <div class="materi1">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>
        <div class="materi2">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>
        <div class="materi3">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>
        <div class="materi4">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>
        <div class="materi5">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>
        <div class="materi6">
            <img src="img/banner.jpeg">
            <button>motivasi wirausaha</button>
        </div>

        <div class="contenti">
            <p>Apa saja yang kita dapetin?</p>
        </div>
        
        <div class="boxd">
            <p>Benefit</p>
            <h1>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
                <br>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
                <br>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
                <br>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
                <br>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
                <br>
                <li>Your content goes here. Edit or remove this text inline or in the module </li>
            </h1>
        </div>

        <div class="squar">
            <P></P>
        </div>
        
    </div>

    <div id="dampak" style="position: relative;">
        <div class="load">
            <p>UMKM Yang<br>
                Terdampak Natar</p>
        </div>
        <div class="gambari">
            <img src="img/banner.jpeg" alt="">
        </div>
        <div class="gambara">
            <img src="img/banner.jpeg" alt="">
        </div>
        <div class="gambarb">
            <img src="img/banner.jpeg" alt="">
        </div>
    
        <div class="gambarut">
            <img src="img/banner.jpeg" alt="">
        </div>

        <div class="hid">
            <P>Memberimu Segenap <br> Pendampingan</P>
            <h1>Natar merupakan platform yang memberi Wirausaha Pemula akses mendapatkan pendampingan untuk mengidentifikasi posisi bisnisnya sehingga dapat berkembang.
            </h1>
        </div>
    
        <div class="boxa">
            <img src="img/banner.jpeg" alt="">
            <p>Lorem</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module this text inline or in the module Content settings.</h1>
        </div>
        <div class="boxb">
            <img src="img/banner.jpeg" alt="">
            <p>Lorem</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module this text inline or in the module Content settings.</h1>
        </div>
        <div class="boxc">
            <img src="img/banner.jpeg" alt="">
            <p>Lorem</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module this text inline or in the module Content settings.</h1>
        </div>
    </div>
    <div id="biaya" style="position: relative;"> 
        <div class="contente">
            <p>BERLANGGANAN</p>
        </div>
        
        <div class="boxp">
            <p>paket 1</p>
            <h1>Rp 39k</h1>
            <li class="satu">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="dua">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="tiga">Your content goes here. Edit or remove this text inline or in the module </li>
            <button>Daftar</button>
        </div>
        <div class="boxo">
            <p>paket 2</p>
            <h1>Rp 39k</h1>
            <li class="satu">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="dua">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="tiga">Your content goes here. Edit or remove this text inline or in the module </li>
            <button>Daftar</button>
        </div>
        <div class="boxi">
            <p>paket 3
            </p>
            <h1>Rp 39k</h1>
            <li class="satu">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="dua">Your content goes here. Edit or remove this text inline or in the module </li>
            <li class="tiga">Your content goes here. Edit or remove this text inline or in the module </li>
            <button>Daftar</button>
        </div>

        <div class="hea">
            <p>pendamping</p>
        </div>
    
        <div class="img1">
            <img src="img/dev.jpg" alt="">
            <p>Akang</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module Content settings.</h1>
        </div>
        
        <div class="img2">
            <img src="img/dev.jpg" alt="">
            <p>Akang</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module Content settings.</h1>
        </div>
        
        <div class="img3">
            <img src="img/dev.jpg" alt="">
            <p>Akang</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module Content settings.</h1>
        </div>
        
        <div class="img4">
            <img src="img/dev.jpg" alt="">
            <p>Akang</p>
            <h1>Your content goes here. Edit or remove this text inline or in the module Content settings.</h1>
        </div>
    </div>

    <div id="konsultasi" style="position: relative;">
    </div>
    <div class="he">
        <p>KONSULTASI</p>
    </div>
    <div class="conent">
        <p>Ada Pertanyaan Lain?</p>
        <input type="text" placeholder="Search..">
        <h1>Will be used in accordance with our</h1>
        <a href="#">Privacy Policy</a>
        <div class="box"></div>
    </div>
    </div>














</body>

</html>