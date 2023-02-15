<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login_register/login.php');
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sleepwalker | Get to Know Me!</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/custom.css"/>
    <link type="image/x-icon" href="image/logoku.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Sleepwalker.-</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item align-self-center">
            <a class="nav-link active" aria-current="page" href="#homesecondary">Home</a>
          </li>
          <li class="nav-item align-self-center">
            <a class="nav-link active" href="#about">About</a>
          </li>
          <li class="nav-item align-self-center">
            <a class="nav-link active" href="#projects">Project</a>
          </li>
          <li class="nav-item dropdown align-self-center">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Social Media
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://www.instagram.com/dicky_athalla33/" target="_blank">Instagram</a></li>
              <li><a class="dropdown-item" href="https://www.linkedin.com/in/muhammad-dicky-athalla-9b2286205/" target="_blank">linked.in</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#contact">Email me!</a></li>
            </ul>
          </li>
          <!-- <a class="btn px-3 bi-box-arrow-right btn-secondary" href="register.php" role="button"> Sign Up</a> -->
          <a class="btn px-3 bi-box-arrow-right btn-secondary" href="login_register/logout.php" role="button">Log Out</a>
       </ul>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron text-center">
    <img src="image/Dicky.jpg" alt="Muhammad Dicky Athalla" width="300" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Muhammad Dicky Athalla</h1>
    <p class="lead">Junior Web Developer | Cloud Enthusiast | Web Dev Enthusiast</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,181.3C274.3,181,343,139,411,144C480,149,549,203,617,229.3C685.7,256,754,256,823,224C891.4,192,960,128,1029,101.3C1097.1,75,1166,85,1234,101.3C1302.9,117,1371,139,1406,149.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </div>
    <!-- Akhir Jumbotron -->

  <!-- homesecondary -->
    <section id="homesecondary" class="herobwa">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col justify-content-center d-none d-sm-block d-sm-none d-md-block align-self-stretch">
                    <img width="500" src="image/fotokuu.png" alt="">
                </div>
                <div class="col align-self-center">
                    <p class="fs-1 fw-bold mb-3">
                        Muhammad Dicky Athalla
                    </p>
                    <p class="mb-3">
                        Seorang Mahasiswa Teknik Telekomunikasi Politeknik Elektronika Negeri Surabaya
                    </p>
                    <a class="btn btn-primary" href="https://www.linkedin.com/in/muhammad-dicky-athalla-9b2286205/" target="_blank" role="button">Kenalan yuk!</a>
                </div>
                <div class="row text-center mt mb-1">
                  <div class="col mt-3">
                    <h2>Skills</h2>
                  </div>
                </div>
                <div class="row row row-cols-1 row-cols-md-4 g-4 mt-1">
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/node.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/mysql.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/js.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/php.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                </div>
                <div class="row row row-cols-1 row-cols-md-4 g-4 mt-2">
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/figma.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/bootstrap.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/aws.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                  <div class="col">
                    <div class="card justify-content-center text-center border-0">
                        <img src="image/projects/hcia.png" width="100" class="card-img-top" alt="logo">
                    </div>
                  </div>
                </div>
            </div>                                    
        </div>
        
    </section>
  <!-- akhir homesecondary -->

  <!-- About -->
    <section id="about">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L34.3,181.3C68.6,171,137,149,206,154.7C274.3,160,343,192,411,197.3C480,203,549,181,617,181.3C685.7,181,754,203,823,202.7C891.4,203,960,181,1029,176C1097.1,171,1166,181,1234,176C1302.9,171,1371,149,1406,138.7L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row text-center mt mb-1">
          <div class="col mb-3">
            <h1>About me</h1>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-8">
            <p>I am a D3 Telecommunications Engineering graduate with a passion for web development and cloud computing. I have internship 
            experience as a web developer and java application development. I have designed 3+ websites in 1 year. Always learning new things and 
            able to work under pressure.
            </p>
          </div>
        </div>  
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L34.3,112C68.6,128,137,160,206,176C274.3,192,343,192,411,170.7C480,149,549,107,617,80C685.7,53,754,43,823,64C891.4,85,960,139,1029,144C1097.1,149,1166,107,1234,85.3C1302.9,64,1371,64,1406,64L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
  <!-- Akhir About -->

  <!-- Projects -->
      <section id="projects">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h1>My Projects</h1>
            </div>
          </div>
          <div class="row g-3 mb-3 mt-1">            
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/nexflit.png" class="card-img-top" alt="Project 3">
                <div class="card-body">
                  <h5 class="card-title">NexFlit - Website untuk Streaming Film</h5>
                  <p class="card-text">Membuat web streaming, manajemen, pencarian film dengan menggunakan bootstrap dan PHP.</p>
                  <a href="databarang/menubarang.php" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/lsp.png" class="card-img-top" alt="Project 2">
                <div class="card-body">
                  <h5 class="card-title">Website Prototipe Lembaga Sertifikasi Profesi (LSP) DIGITAL</h5>
                  <p class="card-text">Membuat prototipe Website Lembaga Sertifikasi Profesi(LSP) sebagai tugas sertifikasi Junior Web Developer.</p>
                  <a href="databarang/menubarang.php" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/ibros.png" class="card-img-top" alt="Project 3">
                <div class="card-body">
                  <h5 class="card-title">Sistem Pendeteksi Jalan Bergelombang (Alat+WebGIS)</h5>
                  <p class="card-text">Membuat Sistem Pendeteksi Jalan Bergelombang sebagai Tugas Akhir Perkuliahan.</p>
                  <a href="https://drive.google.com/drive/folders/1GdsdnY881R6ZZ5v3cwfxnmJmS8hiKLkf?usp=share_link" target="_blank" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/porto.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Website Portofolio</h5>
                  <p class="card-text">Membuat website portofolio diri dengan mengimplementasikan Bootstrap dalam pembuatan web ini.</p>
                  <a href="#" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/menu.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Project Pesan Menu (bootcamp)</h5>
                  <p class="card-text">Membuat form pemesanan dan penjumlahan menu sederhana dalam mengimplementasikan javascript.</p>
                  <a href="menu.html" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card justify-content-center text-center border-warning">
                <img src="image/projects/tambah.png" class="card-img-top" alt="Project 2">
                <div class="card-body">
                  <h5 class="card-title">Project Tambah Barang (bootcamp)</h5>
                  <p class="card-text">Membuat fitur menambahkan barang dalam mengimplementasikan operasi CRUD dengan PHP.</p>
                  <a href="databarang/menubarang.php" class="btn btn-primary">Lihat Projek</a>
                </div>
              </div>
            </div>
          </div>
            
          </div>

          
          <!-- <div>
            <div class="row justify-content-center">
              <div class="col-md-4 mb-2 align-self-center">
                <div class="card text-center style="width: 18rem;">
                  <img src="image/food.jpg" class="card-img-top" alt="food.jpg">
                  <div class="card-body">
                    <h5 class="card-title">Project Pesan Menu</h5>
                    <p class="card-text">Membuat form pemesanan menu dengan javascript.</p>
                    <a href="menu.html" class="btn btn-primary">Pesan Menu</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff9900" 
          fill-opacity="1" d="M0,160L34.3,138.7C68.6,117,137,75,206,74.7C274.3,75,343,117,
          411,122.7C480,128,549,96,617,117.3C685.7,139,754,213,823,208C891.4,203,960,117,
          1029,96C1097.1,75,1166,117,1234,128C1302.9,139,1371,117,1406,106.7L1440,96L1440,
          320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,
          891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,
          320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </section>
  <!-- Akhir Projects -->

  <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h1>Contact Me!</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="5"></textarea required>
                </div>
                <button type="submit" class="btn btn-primary text-white text-center">Kirim</button>
              </form>
            </div>
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" 
          fill-opacity="1" d="M0,32L34.3,48C68.6,64,137,96,206,101.3C274.3,107,343,85,411,
          106.7C480,128,549,192,617,186.7C685.7,181,754,107,823,90.7C891.4,75,960,117,1029,
          133.3C1097.1,149,1166,139,1234,128C1302.9,117,1371,107,1406,101.3L1440,96L1440,
          320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,
          891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,
          274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
      <footer class="text-center text-white bg-dark pb-3">
          <p>Cretead by <a href="https://www.instagram.com/dicky_athalla33/" target="_blank" class="text-white"
            >Muhammad Dicky Athalla</a>©</p>
      </footer>
  <!-- Akhir Footer -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>