document.querySelector('#btn-submit').addEventListener('click', verificarCaptcha);

let botonenvio= document.querySelector("#enviar");

function generarCaptcha() {
    const captchaDiv = document.getElementById('captcha');
    const numeros = [];
    for (let i = 0; i < 3; i++) {
        numeros.push(Math.floor(Math.random() * 10));
    }
    captchaDiv.textContent = numeros.join(' ');
    return numeros.join('');
}

function verificarCaptcha(e) {
    e.preventDefault()
    const userInput = document.getElementById('usuario-input').value;
    const messageDiv = document.getElementById('mensaje');
    if (userInput === captcha) {
        messageDiv.textContent = 'Captcha correcto';
        messageDiv.style.color = 'green';
       
    } else {
        messageDiv.textContent = 'Captcha incorrecto. Inténtalo de nuevo.';
        messageDiv.style.color = 'red';
        
        setTimeout(() => {
            captcha = generarCaptcha();
            document.getElementById('usuario-input').value = '';
        }, 1500);

        setTimeout(() => {
            messageDiv.textContent = '';
        }, 1500);
    }
}


// Generar el captcha al cargar la página
let captcha = generarCaptcha();
