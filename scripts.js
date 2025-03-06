document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar envío por defecto

    // Mostrar un mensaje de éxito al enviar el formulario
    const formMessage = document.getElementById("formMessage");
    formMessage.textContent = "Gracias por tu mensaje. Nos pondremos en contacto pronto.";

    // Aquí puedes realizar una llamada AJAX para enviar el formulario sin recargar la página si lo deseas
});
