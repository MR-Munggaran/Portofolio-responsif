
      function populateHomeContent(data) {
        const homeContent = document.querySelector('.home-content');
        homeContent.innerHTML = `
          <h3>Hello It's Me</h3>
          <h1>${data.namaSaya}</h1>
          <h3>And I'am a <span class="multiple-text"></span></h3>
          <p>${data.deskripsi}</p>
          <div class="social-media">
            <a href="https://www.facebook.com/munggaran25"><i class="bx bxl-facebook"></i></a>
            <a href="https://github.com/MR-Munggaran"><i class='bx bxl-github'></i></a>
            <a href="https://www.instagram.com/rafimunggaran/"><i class="bx bxl-instagram-alt"></i></a>
            <a href="https://www.linkedin.com/in/rafi-munggaran-b23a16273/"><i class="bx bxl-linkedin"></i></a>
          </div>
          <a href="https://ibb.co/YpC7Sjj" class="btn"> Download CV</a>
        `;
    
        const homeImage = document.querySelector('.home-img img');
        homeImage.src = `images/${data.nama}`;
    
        // Mengambil elemen span dengan class "multiple-text" setelah membuatnya
        const multipleText = homeContent.querySelector('.multiple-text');
    
        // Menambahkan kelas "active" ke elemen span
        multipleText.classList.add('active');
    
        if (typeof Typed !== 'undefined') {
          // Inisialisasi Typed.js hanya jika sudah dimuat
          const typed = new Typed('.multiple-text', {
            strings: ["Frontend Developer", "Student", "Backend Developer"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
          });
        }
      }
    
      // Menggunakan fetch untuk mengambil data dari API
      fetch('php/API/home.php')
        .then((response) => response.json())
        .then((data) => {
          populateHomeContent(data);
        })
        .catch((error) => {
          console.error("Error:", error);
        });


// //scroll reveal
ScrollReveal({
    //   reset: true,
    distance: "80px",
    duration: 2000,
    delay: 200,
  });
  
  ScrollReveal().reveal(".home-content, .heading", { origin: "top" });
  ScrollReveal().reveal(
    ".home-img, .services-container, .portofolio-box, .contact form",
    { origin: "bottom" }
  );
  ScrollReveal().reveal(".home-content h1, .about-img", { origin: "left" });
  ScrollReveal().reveal(".home-content p, .about-content", { origin: "right" });