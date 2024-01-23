<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PEPELEG SMECONE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/style.css" />
  <link rel="icon" href="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png" alt="Logo" width="50" height="50"
            class="d-inline-block align-text-top me-2" />
          <h1 class="h1 m-0 font-monospace text-white fw-bolder">PPLG</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarExample01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold font-monospace">
            <li class="nav-item active">
              <a class="nav-link text-white" aria-current="page" href="#Beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Materi">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Prestasi">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Guru">Guru</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Daftar Kelas</a>
              <ul class="drop dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="option dropdown-item font-monospace" href="#">X PPLG 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">X PPLG 2</a></li>
                <li><a class="option dropdown-item font-monospace" href="DaftarKelas/XIPPLG1.php">XI PPLG 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XI PPLG 2</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XII RPL 1</a></li>
                <li><a class="option dropdown-item font-monospace" href="#">XII RPL 2</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="Beranda" class="jarak">
    <div class="container p-5 p-md-5">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <h1 class="font-monospace fw-bolder">What Is PPLG ?</h1>
          <p class="font-monospace">
            PPLG atau Pengembangan Perangkat Lunak dan Gim adalah sebuah jurusan di SMK,jurusan ini mempelajari dan
            mendalami cara-cara mengembangkan perangkat lunak. Mulai dari pembuatan, pemeliharaan, manajemen kualitas,
            dan manajemen organisasi pengembangan perangkat lunak.Selain itu, jurusan PPLG juga berhubungan dengan
            software komputer seperti pembuatan aplikasi, website, game dan semua yang berhubungan dengan pemrograman.
            Singkatnya, jurusan PPLG erat kaitannya dengan coding, desain, dan algoritma.
          </p>
          <a class="btn btn-dark fw-bold font-monospace rounded-3" href="#Materi">More Info</a>
        </div>
        <div class="col-12 col-md-6">
          <img class="w-100" src="https://th.bing.com/th/id/OIP.EykJzHvfMpdtSnx377dDqwHaHa?pid=ImgDet&rs=1" alt="PPLG" />
        </div>
      </div>
    </div>
  </section>

  <section id="Materi" class="jarak">
    <div class="container">
      <div class="row text-center font-monospace">
        <div class="col mb-3">
          <h1 class="fw-bolder">Materi</h1>
          <p>Berikut Beberapa Materi Yang Dipelajari Di Berbagai Kelas:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-lg-4 font-monospace">
          <div class="card text-white mb-3 p-3" style="background-color: #212529">
            <div class="card-header border-warning text-center" style="border-width: 3px">
              <h1>X PPLG</h1>
            </div>
            <div class="card-body text-center">
              <p class="card-text">Pada kelas 10 , peserta didik akan mendapatkan materi terkait pemrograman dasar ,
                algoritma , desain , dan IoT (Arduino).</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#myModal1"
                style="background-color: rgb(218, 165, 32)">
                Lebih Lengkap
              </button>

              <!-- Modal -->
              <div class="modal fade" style="backdrop-filter: blur(5px);" id="myModal1" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black;">Materi X PPLG</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Materi ketika memasuki kelas 10 yaitu mempelajari terkait C++ dasar hingga membuat suatu
                      program sederhana, dilanjutkan mempelajari C# dasar hingga mempelajari aritmatika dalam C# lalu
                      juga ketika sudah membuat beberapa program materi akan berlanjut ke desain yang dibuat menggunakan
                      AI / Adobe Illustrator yang dimana dipelajari dasar nya terlebih dahulu lalu lama kelamaan akan
                      mempelajari untuk pembuatan logo dan diakhiri semester 2 akan mempelajari IoT Arduino untuk
                      pembuatan
                      benda dengan sensor apapun.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 font-monospace">
          <div class="card text-white mb-3 p-3" style="background-color: #212529">
            <div class="card-header border-warning text-center" style="border-width: 3px">
              <h1>XI PPLG</h1>
            </div>
            <div class="card-body text-center">
              <p class="card-text">Pada kelas 11 , peserta didik akan mendapatkan materi terkait web frontend dan web
                backend. Lalu juga akan mendapatkan pembelajaran terkait PBO.</p>
              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#myModal2"
                style="background-color: rgb(218, 165, 32)">
                Lebih Lengkap
              </button>

              <!-- Modal -->
              <div class="modal fade" style="backdrop-filter: blur(5px);" id="myModal2" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black;">Materi XI PPLG</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Materi ketika memasuki kelas 11 yaitu mempelajari front end dan juga back end,diawal peserta
                      didik akan mempelajari front end terlebih dahulu untuk membuat tampilan yang dilihat langsung oleh
                      layar monitor dan ketika sudah dirasa cukup untuk front end maka selanjutnya akan mempelajari back
                      end yang dimana ini adalah tampilan database yang tidak dapat dilihat langsung oleh layar monitor
                      pengunjung situs, dan dilanjutkan dengan mempelajari CRUD
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 font-monospace">
          <div class="card text-white mb-3 p-3" style="background-color: #212529">
            <div class="card-header border-warning text-center" style="border-width: 3px">
              <h1>XII RPL</h1>
            </div>
            <div class="card-body text-center">
              <p class="card-text">Pada kelas 12 , peserta didik akan mendapatkan materi terkait larafel, dan lebih
                memperdalam materi terkait OOP dan CRUD.</p>
              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#myModal3"
                style="background-color: rgb(218, 165, 32)">
                Lebih Lengkap
              </button>

              <!-- Modal -->
              <div class="modal fade" style="backdrop-filter: blur(5px);" id="myModal3" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: black;">Materi XII RPL</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Materi ketika kelas 12 lebih kepada mempelajari lebih lanjut materi sebelumnya, dan materi yang
                      dipelajari seperti CRUD dan LARAVEL yaitu materi yang lebih mempelajari bagian database.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Prestasi" class="jarak">
    <div class="container">
      <div class="row">
        <div class="col font-monospace text-center">
          <h1 class="fw-bolder">Prestasi</h1>
          <p>Berikut Merupakan Beberapa Prestasi Dari Jurusan Kita :</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 font-monospace">
          <div class="timeline mt-4">
            <div class="timeline-item">
              <div class="timeline-content">
                <h4 class="mt--2">Juara 1 web desain tingkat kabupaten</h4>
                <p>
                  Web Design Competition adalah perlombaan yang diperuntukan bagi mahasiswa/mahasiswi aktif program sarjana
                  maupun diploma di perguruan tinggi swasta atau negeri di seluruh Indonesia dengan menguji
                  kreativitasnya dalam mendesain
                  web.
                </p>
              </div>
              <div class="timeline-date bg-success text-white">2013</div>
            </div>
          </div>
          <div class="timeline mt-4">
            <div class="timeline-item">
              <div class="timeline-content">
                <h4 class="mt--2">Juara 2 graphic design technologi</h4>
                <p>
                  Graphic Design Technology terdiri dari berbagai keterampilan dan disiplin yang berbeda dalam
                  produksi dan hasil desain grafis. Keragaman keterampilan yang dibutuhkan dalam industri Graphic
                  Design Technology sangat luas
                  menjadikan orang-orang yang terlibat dalam industri ini menjadi spesialis dalam aspek tertentu.
                </p>
              </div>
              <div class="timeline-date bg-success text-white">2013</div>
            </div>
          </div>
          <div class="timeline mt-4">
            <div class="timeline-item">
              <div class="timeline-content">
                <h4 class="mt--2">Juara 1 penulisan artikel kearsipan melalui blog</h4>
                <p>Penulis blog atau yang biasa disebut blogger bisa menulis beragam topik, mulai dari soal serius
                  seperti Politik, Teknologi Informasi, Hukum, Pendidikan , Kesusastraan, sampai Musik dan fashion.
                </p>
              </div>
              <div class="timeline-date bg-success text-white">2017</div>
            </div>
              <a class="btn btn-dark fw-bold font-monospace rounded-3 text-center justify-content-center float-end" href="prestasi.html" >More Info</a>
          </div>


          
        </div>
      </div>
    </div>
  </section>

  <section id="Guru" class="jarak">
    <div class="container">
      <div class="row mb-3">
        <div class="col font-monospace text-center">
          <h1 class="fw-bolder">Guru</h1>
          <p>Berikut Merupakan Guru-Guru PPLG :</p>
        </div>
      </div>
      <div class="row font-monospace p-5">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Bu_Faradina.jpeg" alt="">
            <div class="main-text">
              <h2>Faradina, S.Kom</h2>
              <p>Mapel : Informatika</p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/faradina939/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Pak_Hanif.jpeg" alt="">
            <div class="main-text">
              <h2>Hanif Saeful Amin, S.Kom</h2>
              <p>Mapel : Pemrograman Web </p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/hanifsaeful/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Bu_Eva.jpg" alt="">
            <div class="main-text">
              <h2>Eva Nurvaizah, S.Kom</h2>
              <p>Mapel : PBO</p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/evanurvaizah/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Pak_Sukarno.jpg" alt="">
            <div class="main-text">
              <h2>Sukarno, S.Kom</h2>
              <p>Mapel : PBO</p>
            </div>
            <div class="socials">
              <a href=""><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="cardd">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Pak_Willy.jpg" alt="">
            <div class="main-text">
              <h2>Yoga Willy Utomo, S.Kom</h2>
              <p>Mapel : Pengembangan Perangkat Lunak</p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/_yogawilly/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="cardd">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Pak_Jundi.jpeg" alt="">
            <div class="main-text">
              <h2>Muhammad Jundi Hanif, S.Kom</h2>
              <p>Mapel : Mata pelajaran pilihan</p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/mjundihanif/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cardd">
            <img class="img1" src="../public/image/assets/Future.jpeg" alt="">
            <img class="img2" src="../public/image/guru/Bu_Ingga.jpg" alt="">
            <div class="main-text">
              <h2>Ingga Rossi Rahmadani, S.Kom</h2>
              <p>Mapel : Pengembangan Perangkat Lunak</p>
            </div>
            <div class="socials">
              <a
                href="https://www.instagram.com/inggarossi/?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw=="><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-dark text-center text-white ">
    <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
      ©2023 Copyrightt
    </div>
  </footer>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>