<?php
include "../biodatadiri_web/config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $send_message = $_POST['pesan'];

    $sql = "INSERT INTO contact (name, email, pesan) VALUES ('$username', '$email', '$send_message')";

    if ($conn->query($sql)) {
        echo "Berhasil";
    } else {
        echo "gagal";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>website portofolio Tiyas Ayu lestari</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  
  <!-- icon -->
  <link rel="icon" type="image/png" href="">

  <!-- AOS animate on scrol -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- My Style -->
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- Navbar start -->
  <nav class="navbar">
    <a><img src=""> Portofolio's Tiyas Ayu Lestari
    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang saya</a>
      <a href="#works">portofolio</a>
      <a href="#skil-bars">Skils</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="https://www.instagram.com/ssmply.tyas?igsh=dDJkNmk4NWxyODFo" target="_blank" ><i data-feather="instagram"></i></a>
      <a href="https://wa.me/qr/H46C2NA2KNEFE1" target="_blank"><i data-feather="phone"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
    
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->

  <section class="hero" id="home">
    <div class="hero-container">
        <div class="content">
            <h3>Hallo, my name is<span> Tiyas Ayu Lestari</span></h3>
            <div class="static-txt">I'm a</div>
            <ul class="dynamic-txts">
                <li><span>Front End</span></li>
                <li><span>Hasler</span></li>
            </ul>
            <h1>
                <a>feel free to learn </a>
            </h1>
        </div>
        <div class="section_pic-container">
            <img src="tyas.png" alt="Tiyas Ayu Lestari">
        </div>
    </div>
</section>

  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="500">
    <h2><span>Tentang</span> Saya</h2>

    <div class="row">
        <img src="tyasss.png" alt="Tentang Saya">
      <div class="content">
        <h3>Hi Nama saya Tiyas Ayu Lestari</h3>
        <p>Saya Adalah seorang siswi SMK Telkom Purwokerto dan memilih jurusan Rekayasa Perangkat Lunak,
           saya berada di Kelas X PPLG 1 dan saya seorang Web developer saya sangat suka pemrograman terutama bahasa html</p>
      </div>
    </div>

    <div class="about-experience">
      <div class="row-heading-block" data-aos="fade-up">
          <div class="column">
              <h2><span> Work & </span>Education</h2>
          </div>
      </div>

      <div class="work">
        <div class="content-work">
          <p>Not on work</p>
          <h3>Coming Soon</h3>
          <p>Open to remote Contact Me
            <button><a href="#">Here!</a></button>
          </p>
        </div>
      </div>

      <div class="schools">
        <div class="school-list">
          <p>2015 - 2021</p>
          <h3>SDN Pelawad 1</h3>
          <h5>Pendidikan SD</h5>
        </div>

        <div class="school-list">
          <p>2021 - 2024</p>
          <h3>SMPN 1 Pegentan</h3>
          <h5>Pendidikan SMP</h5>
        </div>

        <div class="school-list">
          <p>2024 - Now</p>
          <h3>SMK Telkom Purwokerto</h3>
          <h5>Pendidikan SMK</h5>
        </div>
      </div>
    </div>
                  

  </div> <!-- end about-experience -->

  </section><br><br><br><br>
  <!-- About Section end -->


  <!-- Products Section start -->
  <!-- works
    ================================================== -->
    <section id="works" class="s-works">

      <div class="row_portofolio" data-aos="fade-up">
          <div class="column">
              <h2 > <span>Portofolio</span> Saya</h2>
              <p >
                  Ini adalah beberapa project yang telah saya selesaikah dalam 1 tahun kebelakang.
                   Feel free to improve,
                   check them out.
              </p>
          </div>
      </div> <!-- end heading-block -->
      <div class="projects-grid">
                <div class="portfolio-card">
                    <img src="web skincare.png" alt="Project Image">
                    <h3>Projek PTS Ganjil</h3>
                    <p>Deskripsi singkat tentang proyek ini...</p>
                </div>
        
                <div class="portfolio-card">
                    <img src="website movie.png" alt="Project Image">
                    <h3>Projek PTS Ganjil</h3>
                    <p>Deskripsi singkat tentang proyek ini...</p>
                </div>
        
                <div class="portfolio-card">
                    <img src="design game.jpeg" alt="Project Image">
                    <h3>Projek PTS Ganjil</h3>
                    <p>Deskripsi singkat tentang proyek ini...</p>
                </div>
        
                <div class="portfolio-card">
                    <img src="design muka.jpeg" alt="Project Image">
                    <h3>Projek PTS Ganjil</h3>
                    <p>Deskripsi singkat tentang proyek ini...</p>
                </div>
            </div><br><br><br><br>
      

  </section> <!-- end s-work -->
  <!-- Products Section end -->

  <!-- skils start -->
<div id="skil-bars"  class="skilbar" data-aos="fade-up" data-aos-duration="500" data-aos-offset="300">
  <h2><span>Skils</span> Bars</h2>
  <p>Berikut adalah skil yang saya pahami didalam bentuk chart</p>
     
  <ul  class="skill-bars">
      <li>
      <div class="progress" style="width: 75%;"><span>70%</span></div>
      <strong>HTML5</strong>
      </li>
      <li>
      <div class="progress" style="width: 80%;"><span>80%</span></div>
      <strong>CSS</strong>
      </li>
      <li>
      <div class="progress" style="width: 35%;"><span>30%</span></div>
      <strong>mysql</strong>
      </li>
      <li>
      <div class="progress" style="width: 40%;"><span>40%</span></div>
      <strong>PHP</strong>
      </li>
      <li>
      <div class="progress" style="width: 20%;"><span>20%</span></div>
      <strong>Laravel</strong>
      </li>
      <li>
      <div class="progress" style="width: 35%;"><span>30%</span></div>
      <strong>JS</strong>
      </li>
  </ul>
</div> 
  <!-- skils end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kirimkan </span>pesan</h2>
    <p>Jika anda ingin menghubungi kami, hubungi saja.feel free to improve.
    </p>

    <div class="row">
    <form action="" id="contact" method="POST">
        <div class="input-group">
          <i data-feather="user"></i>
          <input id="name" name="name" type="text" placeholder="masukan nama anda..." required>
          <span id="name-error" class="error"></span>
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input id="email" name="email" type="text" placeholder="masukan alamat email ..." required>
          <span id="email-error" class="error"></span>
        </div>
        <div class="input-group">
          <i data-feather="message-square"></i>
          <input class="chat" name="pesan" id="password" type="text" placeholder="masukan pesan" required>
          <span id="password-error" class="error" aria-live="polite"></span>
        </div>
        <button type="submit" name="submit" id="btn" class="btn" onsubmit="return validateForm()" onclick="validateForm()">kirim pesan</button>
      </form>
    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/ssmply.tyas?igsh=dDJkNmk4NWxyODFo" target="_blank"><i data-feather="instagram"></i></a>
      <a href="https://wa.me/qr/H46C2NA2KNEFE1" target="_blank"><i data-feather="phone"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang saya</a>
      <a href="#works">galery</a>
      <a href="#skil-bars">Skils</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Tiyas Ayu Lestari</a>. | &copy; 2025.</p>
    </div>

    <button onclick="topFunction()"  id="myBtn" title="Go to top" data-aos="fade-zoom-in"
    data-aos-easing="ease-in-back"
    data-aos-delay="200"
    data-aos-offset="200">Top</button>
  </footer>
  <!-- Footer end -->


  <!-- Modal Box Item Detail start -->
  <div class="modal" id="project-modal">
    <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
            <img id="modal-image" src="" alt="">
            <p id="modal-caption"></p>
        </div>
    </div>
</div>
  <!-- Modal Box Item Detail end -->

  


  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- AOS animate on scrol -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- My Javascript -->
  <script src="script.js"></script>
  ></script>

</body>

</html>