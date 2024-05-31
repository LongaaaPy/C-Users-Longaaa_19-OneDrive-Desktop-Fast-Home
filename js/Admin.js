document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('passwordForm');
    const passwordInput = document.getElementById('password');
    const messageDiv = document.getElementById('mensaje');
  
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Evitar el envío del formulario
  
      const password = passwordInput.value.trim();
  
      if (password === 'Fasthome') {
        window.location.href = '../Controller/Panel de datos.php'; // Redirigir a la página secreta
      } else {
        messageDiv.textContent = 'Contraseña incorrecta. Inténtalo de nuevo.';
        messageDiv.style.color = 'red';
      }
    });
  });
  