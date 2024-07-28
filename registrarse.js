document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('registroForm');
    form.addEventListener('submit', function(event) {
        // Ejemplo de validación simple
        const nombre = document.getElementById('nombre').value;
        const apellido = document.getElementById('apellido').value;
        const edad = document.getElementById('edad').value;
        const correo = document.getElementById('correo').value;
        const password = document.getElementById('password').value;
        const terminos = document.getElementById('terminos').checked;
        // Validar edad
        if (edad < 18) {
            alert('Debe tener al menos 18 años para registrarse.');
            event.preventDefault();
            return;
        }
        // Validar contraseña (mínimo 6 caracteres)
        if (password.length < 6) {
            alert('La contraseña debe tener al menos 6 caracteres.');
            event.preventDefault();
            return;
        }
        // Validar correo electrónico (formato básico)
        const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correoRegex.test(correo)) {
            alert('Ingrese un correo electrónico válido.');
            event.preventDefault();
            return;
        }
        // Validar términos y condiciones
        if (!terminos) {
            alert('Debe aceptar los términos y condiciones.');
            event.preventDefault();
            return;
        }
        // Aquí puedes añadir más validaciones según sea necesario
        // Si todas las validaciones son correctas, el formulario se enviará
    });
});