document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar el formulario y el campo de la cédula
    var form = document.querySelector('form');
    var dniInput = document.getElementById('dni');

    // Agregar un evento al formulario para la validación
    form.addEventListener('submit', function (event) {
        // Validar que el campo de la cédula contenga solo números y tenga exactamente 10 dígitos
        if (!/^\d{10}$/.test(dniInput.value)) {
            alert('Por favor, ingrese una cédula válida de 10 dígitos.');
            event.preventDefault(); // Evitar que el formulario se envíe
        }
    });

    // Agregar evento para limitar la longitud a 10 caracteres
    dniInput.addEventListener('input', function () {
        if (dniInput.value.length > 10) {
            dniInput.value = dniInput.value.slice(0, 10);
        }
    });
});