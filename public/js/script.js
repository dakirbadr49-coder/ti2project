document.addEventListener('DOMContentLoaded', () => {
    // Gestion du menu mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Gestion de la soumission du formulaire (Page Contact)
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(contactForm);
            console.log("Données capturées (prêtes pour une API PHP) :", Object.fromEntries(formData));
            alert("Merci ! Votre message a bien été simulé et traité en JavaScript.");
            contactForm.reset();
        });
    }
});