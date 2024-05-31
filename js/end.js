
// Función para iniciar la cuenta regresiva y la barra de carga
function startCountdown() {
    var seconds = 10;
    var timerElement = document.getElementById('timer');
    var progressElement = document.getElementById('progress');

    var interval = setInterval(function() {
        seconds--;
        timerElement.innerText = seconds;

        var progress = 100 - (seconds * 10); // Calcular el progreso de la barra de carga
        progressElement.style.width = progress + '%';

        if (seconds <= 0) {
            clearInterval(interval);
            timerElement.innerText = '😉¡Tu pedido a llegado!😉';
        }
    }, 1000);
}

// Iniciar la cuenta regresiva y la barra de carga cuando se carga la página
window.onload = startCountdown;

 // Iniciar la animación de la barra de carga
 window.onload = function() {
    var progressBar = document.getElementById('progress');
    progressBar.style.width = '100%';
}

// Iniciar la cuenta regresiva cuando se carga la página
window.onload = startCountdown;





