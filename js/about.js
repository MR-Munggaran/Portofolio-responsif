
        function populateAboutContent(data) {
          const aboutImg = document.querySelector('.about-img img');
          aboutImg.src = `../images/${data.nama}`;
      
          const aboutContent = document.querySelector('.about-content');
          aboutContent.querySelector('h3').textContent = data.namaSaya;
          aboutContent.querySelector('p').innerHTML = data.deskripsi;
        }
      
        // Menggunakan fetch untuk mengambil data dari API
        fetch('../php/API/about.php')
          .then((response) => response.json())
          .then((data) => {
            populateAboutContent(data);
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