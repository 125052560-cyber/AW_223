const btnCambiarTexto = document.getElementById('btn-cambiar-texto');
const mensajeBienvenida = document.getElementById('mensaje-bienvenida');

btnCambiarTexto.addEventListener('click', () => {
  mensajeBienvenida.textContent = '¡Gracias por visitar mi portafolio! ';
});

const btnCambiarColor = document.getElementById('btn-cambiar-color');
const btnCambiarFuente = document.getElementById('btn-cambiar-fuente');
const cajasHabilidades = document.querySelectorAll('.caja-habilidad');

btnCambiarColor.addEventListener('click', () => {
  cajasHabilidades.forEach(caja => {
    if (caja.style.backgroundColor === 'lightblue') {
      caja.style.backgroundColor = '#e0e0e0';
      caja.style.color = '#000';
    } else {
      caja.style.backgroundColor = 'lightblue';
      caja.style.color = '#003366';
    }
  });
});

btnCambiarFuente.addEventListener('click', () => {
  cajasHabilidades.forEach(caja => {
    caja.style.fontFamily = caja.style.fontFamily === 'monospace' ? 'sans-serif' : 'monospace';
  });
});

const formContacto = document.getElementById('form-contacto');

formContacto.addEventListener('submit', (event) => {
  event.preventDefault();

  const nombre = document.getElementById('nombre').value.trim();
  const correo = document.getElementById('correo').value.trim();

  if (nombre === '') {
    alert('Por favor, escribe tu nombre');
    return;
  }

  if (correo === '') {
    alert('El correo es obligatorio');
    return;
  }

  alert('Formulario enviado correctamente');
  formContacto.reset();
});