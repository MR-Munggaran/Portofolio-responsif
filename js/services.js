
        function populateServices(data) {
          const servicesContainer = document.getElementById('services-container');
          data.forEach(service => {
            const serviceBox = document.createElement('div');
            serviceBox.classList.add('services-box');
            serviceBox.innerHTML = `
              ${service.icons}
              <h3>${service.judul}</h3>
              <p>${service.ket}</p>
            `;
            servicesContainer.appendChild(serviceBox);
          });
        }
      
        // Menggunakan fetch untuk mengambil data dari API
        fetch('../php/API/service.php')
          .then(response => response.json())
          .then(data => {
            populateServices(data);
          })
          .catch(error => {
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