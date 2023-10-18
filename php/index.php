<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <!-- Header design -->
    <header class="header">
      <a href="main.html" class="logo">Munggaran</a>
      <i class="bx bx-menu" id="menu-icons"></i>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portofolio">Portofolio</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>
    <?php
    include 'connection.php';
    include 'function.php';
    ?>
    <!-- Home Section -->
    <section class="home" id="home">
      <?php
        $data_home = fetchHomeData($conn);
        $id_home = 1;
        // $data_gambar = fetchHomeImage($conn, $id_home);
      // ?>
      <div class="home-content">
        <h3>Hello It's Me</h3>
        <h1><?= $data_home["namaSaya"];?></h1>
        <h3>And I'am a <span class="multiple-text"></span></h3>
        <p><?= $data_home["deskripsi"];?></p>
        <div class="social-media">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="https://github.com/MR-Munggaran"><i class='bx bxl-github'></i></a>
          <a href="https://www.instagram.com/rafimunggaran/"><i class="bx bxl-instagram-alt"></i></a>
          <a href="https://www.linkedin.com/in/rafi-munggaran-b23a16273/"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="https://www.canva.com/design/DAFn9YMaKMI/E1R4bAgYdoFpDJylhKQkkg/edit?utm_content=DAFn9YMaKMI&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn"> Download CV</a>
      </div>
      <div class="home-img">
        <img src="../images/<?= $data_home['nama']?>" alt="" />
      </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <?php 
        $data_about = fetchAboutData($conn);
        $id_about = 1;
        // $data_gambar_about = fetchAboutImage($conn, $id_about);
      ?>
      <div class="about-img">
        <img src="../images/<?= $data_about['nama']?>" alt="" />
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3><?= $data_about["namaSaya"];?></h3>
        <p><?= $data_about["deskripsi"];?></p>
        <!-- <a href="about.html" class="btn">Read More</a> -->
      </div>
    </section>
    <!-- Section Services -->
    <section class="services" id="services">
    <?php
      $services = retrieveServices($conn); // Panggil fungsi untuk mengambil data layanan
    ?>
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <!-- Menampilkan data layanan -->
        <?php foreach ($services as $service) { ?>
            <div class="services-box">
                <?= $service['icons']; ?>
                <h3><?= $service['judul']; ?></h3>
                <p><?= $service['ket']; ?></p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
        <?php } ?>
    </div>
    </section>

    <!-- Portofolio sections -->
    <section class="portofolio" id="portofolio">
    <?php 
      $portfolio = retrievePortfolio($conn); // Panggil fungsi untuk mengambil data portofolio
    ?>
    <h2 class="heading">Latest <span>Project</span></h2>
    <div class="portofolio-container">
        <!-- Menampilkan data portofolio -->
        <?php foreach ($portfolio as $project) { ?>
            <div class="portofolio-box">
                <img src="../images/<?= $project['nama']; ?>" alt="" />
                <div class="portofolio-layer">
                    <h4><?= $project['judul']; ?></h4>
                    <p><?= $project['ket']; ?></p>
                    <a href="<?= $project['link']; ?>"> <i class="bx bx-link-external"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

    <!-- contact section -->
    <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <?php

        list($notify, $notifyClass) = processContactForm($conn); // Panggil fungsi untuk memproses formulir kontak
        if (!empty($notify)) { ?>
            <p class="notify <?php echo !empty($notifyClass) ? $notifyClass : ''; ?>"><?php echo $notify; ?></p>
        <?php } ?>

        <!-- Sisipkan formulir kontak di sini -->
        <fieldset class="inpit-box">
          <input placeholder="Nama Anda" type="text" name="name" tabindex="1">
          <input placeholder="Email Anda" type="text" name="email" tabindex="2" >
        </fieldset>
        <fieldset class="inpit-box">
          <input type="number" placeholder="Mobile Number" name="phone"/>
          <input type="text" placeholder="Email Subject" name="subject"/>
        </fieldset>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Ketikan pesan Anda"></textarea>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan" class="btn">Kirim</button>
    </form>
</section>

    <!-- footer -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Rafi Munggaran</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- typed.js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- -------------------- -->
    <script src="../js/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
