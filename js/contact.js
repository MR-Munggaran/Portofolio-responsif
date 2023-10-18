document.getElementById("contact-submit").addEventListener("click", function () {
    var name = document.querySelector('input[name="name"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var phone = document.querySelector('input[name="phone"]').value;
    var subject = document.querySelector('input[name="subject"]').value;
    var message = document.querySelector('textarea[name="message"]').value;

    var data = new FormData();
    data.append('name', name);
    data.append('email', email);
    data.append('phone', phone);
    data.append('subject', subject);
    data.append('message', message);

    fetch("api.php", {
        method: "POST",
        body: data,
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert("Error: " + data.error);
        } else if (data.success) {
            alert(data.success);
        }
    })
    .catch(error => {
        console.error("Request error: " + error);
    });
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