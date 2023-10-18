
// Fungsi untuk mengisi data portofolio ke dalam container
function populatePortofolio(data) {
const portofolioContainer = document.getElementById('portofolio-container');
data.forEach(project => {
const portofolioBox = document.createElement('div');
portofolioBox.classList.add('portofolio-box');
portofolioBox.innerHTML = `
<img src="../images/${project.nama}" alt="" />
<div class="portofolio-layer">
  <h4>${project.judul}</h4>
  <p>${project.ket}</p>
  <a href="${project.link}"> <i class="bx bx-link-external"></i></a>
</div>
`;
portofolioContainer.appendChild(portofolioBox);
});
}

// Menggunakan fetch untuk mengambil data dari API
fetch('../php/API/project.php')
.then(response => response.json())
.then(data => {
populatePortofolio(data);
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