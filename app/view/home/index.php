<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.css">
</head>
<style>
     .timeline {
    position: relative;
    max-width: 800px;
    margin: 50px auto;
}

.timeline-item {
    margin-bottom: 50px;
}

.timeline-content {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.timeline-date {
    position: absolute;
    top: 10px;
    right: 0;
    background: #4caf50;
    color: #fff;
    padding: 5px 10px;
    border-radius: 3px;
    font-size: 14px;

}
.jarak {
    margin-top: 2rem;
}
.card {
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    border-radius: 15px;
}
.img1{
    height: 200px;
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;
    width: 100%;
}
.img2{
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    z-index: 1;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    border: 7px solid #fff;
    margin-top: -80px;
}
.card:hover .img2 {
    border-color: darkcyan;
    transition: .7s;
}
.main-text h2 {
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    font-size: 20px;
    margin: 0 0 20px;
}
.main-text p {
    text-align: center;
    padding-bottom: 20px;
}

.socials{
    text-align: center;
    padding-bottom: 20px;
}
.socials i {
    font-size: 20px;
    color: darkcyan;
    padding: 0 10px;
}

</style>
<body>
<header>
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top me-2" />
            <h1 class="h1 m-0 font-monospace text-white fw-bolder">PPLG</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Daftar Kelas</a>
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
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, nostrum eveniet mollitia ducimus, odio pariatur cupiditate sequi voluptatibus at maxime quibusdam incidunt hic? Ex consectetur, omnis aliquid corrupti
              inventore provident.
            </p>
            <a class="btn btn-dark fw-bold font-monospace rounded-3" href="#">More Info</a>
          </div>
          <div class="col-12 col-md-6">
            <img class="w-100" src="../public/img/Tanya.jpg" alt="PPLG" />
          </div>
        </div>
      </div>
    </section>

    <section id="Materi" class="jarak">
      <div class="container">
        <div class="row text-center font-arial">
          <div class="col">
            <h1 class="fw-bolder">Materi</h1>
            <p>Berikut Beberapa Materi Yang Dipelajari Di Berbagai Kelas:</p>
          </div>
        </div>
        <div class="row font-">
          <div class="col-md-4 col-lg-4 font-monospace">
            <div class="card text-white mb-3" style="background-color: #212529">
              <div class="card-header border-warning text-center" style="border-width: 3px">
                <h1>X PPLG</h1>
              </div>
              <div class="card-body text-center">
                <p class="card-text">Pada kelas 10 , peserta didik akan mendapatkan materi terkait pemrograman dasar , algoritma , desain , dan IoT (Arduino).</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button"  style="background-color: rgb(218, 165, 32)">Lebih Lengkap<img src="assets/arrow-right.png" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 font-monospace">
            <div class="card text-white mb-3" style="background-color: #212529">
              <div class="card-header border-warning text-center" style="border-width: 3px">
                <h1>XI PPLG</h1>
              </div>
              <div class="card-body text-center">
                <p class="card-text">Pada kelas 11 , peserta didik akan mendapatkan materi terkait web frontend dan web backend. Lalu juga akan mempelajari terkait PBO.</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button" style="background-color: rgb(218, 165, 32)">Lebih Lengkap<img src="assets/arrow-right.png" alt="" /></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 font-monospace">
            <div class="card text-white mb-3" style="background-color: #212529">
              <div class="card-header border-warning text-center" style="border-width: 3px">
                <h1>XII RPL</h1>
              </div>
              <div class="card-body text-center">
                <p class="card-text">Pada kelas 12 , peserta didik akan mendapatkan materi terkait larafel, dan lebih memperdalam materi terkait OOP dan CRUD.</p>
                <a class="btn btn-outline-light btn-lg m-5" href="#!" role="button" style="background-color: rgb(218, 165, 32)">Lebih Lengkap<img src="assets/arrow-right.png" alt=""/></a>
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
                    Web Design Competition adalah perlombaan yang diperuntukan bagi mahasiswa/i aktif program sarjana maupun diploma di perguruan tinggi swasta atau negeri di seluruh Indonesia dengan menguji kreativitasnya dalam mendesain
                    web.
                  </p>
                </div>
                <div class="timeline-date bg-success text-white">2013</div>
              </div>
              <div class="timeline-item">
                <div class="timeline-content">
                  <h4 class="mt--2">Juara 2 graphic design technologi</h4>
                  <p>
                    Graphic Design Technology terdiri dari berbagai keterampilan dan disiplin yang berbeda dalam produksi dan hasil desain grafis. Keragaman keterampilan yang dibutuhkan dalam industri Graphic Design Technology sangat luas
                    menjadikan orang-orang yang terlibat dalam industri ini menjadi spesialis dalam aspek tertentu.
                  </p>
                </div>
                <div class="timeline-date bg-success text-white">2013</div>
              </div>
              <div class="timeline-item">
                <div class="timeline-content">
                  <h4 class="mt--2">Juara 1 penulisan artikel kearsipan melalui blog</h4>
                  <p>Penulis blog atau yang biasa disebut blogger bisa menulis beragam topik, mulai dari soal serius seperti Politik, Teknologi Informasi, Hukum, Pendidikan , Kesusastraan, sampai Musik dan fashion.</p>
                </div>
                <div class="timeline-date bg-success text-white">2017</div>
              </div>
              <div class="timeline-item">
                <div class="timeline-content">
                  <h4 class="mt--2">juara LKS tingkat Kabupaten Banyumas</h4>
                  <p>Juara 2 Web Design, Juara 2 Cloud Computing, Juara 2 IT Software</p>
                </div>
                <div class="timeline-date bg-success text-white">2022</div>
              </div>
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
            <p>Berikut Merupakan Guru Guru PPLG :</p>
          </div>
        </div>
        <div class="row font-monospace p-5">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="img1" src="../public/img/Future.jpeg" alt="" />
              <img class="img2" src="https://static.vecteezy.com/system/resources/thumbnails/002/387/693/small/user-profile-icon-free-vector.jpg" alt="" />
              <div class="main-text">
                <h2>Person One</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsam quia? Possimus voluptatem saepe sed hic nemo eaque, exercitationem id.</p>
              </div>
              <div class="socials">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>