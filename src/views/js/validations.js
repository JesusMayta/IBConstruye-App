//Formulario index
const indexInputNombres = document.getElementById('nombresIndex');
const indexInputEmail = document.getElementById('emailIndex');
const indexTextTarea = document.getElementById('messageIndex');

const deleteWhiteSpaces = (text = '') => {
    if (text.length > 0 && text[0] === ' ') text = text.trimStart();
    return text;
};

if (window.location.search === '') {

    //Formulario página index
    indexInputNombres.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]/g, '');
    });

    indexInputEmail.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });

    indexTextTarea.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });

} else {

    // Contacto.php
    const primerDigitoPermitido = ['2', '3', '4', '5', '6', '7'];

    //Mensajes de alerta
    const messageCelAlert = document.getElementById('alert_cel');
    const messagePhoneAlert = document.getElementById('alert_phone');
    const messageRucAlert = document.getElementById('alert_ruc');

    // Formulario Persona natural
    const personaNombres = document.getElementById('nombresPersona');
    const personaEmail = document.getElementById('emailPersona');

    personaNombres.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]/g, '');
    });

    personaEmail.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });

    //Formulario Empresa
    const inputEmpresa = document.getElementById('empresa');
    const inputRuc = document.getElementById('ruc');
    const inputCargo = document.getElementById('cargo');
    const inputEmailEmpresa = document.getElementById('emailEmpresa');


    inputEmpresa.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });

    inputRuc.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (e.target.value[0] !== '2' && e.target.value !== '') {
            messageRucAlert.innerText = 'Ingrese un RUC válido';
            inputRuc.classList.add('border-2', 'border-red-600', 'text-red-500');
            messageRucAlert.classList.remove('hidden');
        } else {
            messageRucAlert.classList.add('hidden');
            inputRuc.classList.remove('border-2', 'text-red-500');
        };
    });

    inputCargo.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });

    inputEmailEmpresa.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value);
    });


    //Formulario general
    const inputTelefono = document.getElementById('telefono');
    const inputCelular = document.getElementById('celular');


    inputTelefono.addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (!primerDigitoPermitido.includes(e.target.value[0]) && e.target.value !== '') {
            messagePhoneAlert.innerText = 'Por favor, ingrese un número válido';
            inputTelefono.classList.add('border-2', 'border-red-600', 'text-red-500');
            messagePhoneAlert.classList.remove('hidden');
        } else {
            messagePhoneAlert.classList.add('hidden');
            inputTelefono.classList.remove('border-2', 'text-red-500');
        }
    });

    inputCelular.addEventListener('input', (e) => {

        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (e.target.value[0] !== '9' || e.target.value === '') {
            messageCelAlert.innerText = 'El número debe empezar con 9';
            inputCelular.classList.add('border-2', 'border-red-600', 'text-red-500');
            messageCelAlert.classList.remove('hidden');
            if (e.target.value === '') messageCelAlert.innerText = 'Debe ingresar su número celular';
        } else {
            messageCelAlert.classList.add('hidden');
            inputCelular.classList.remove('border-2', 'text-red-500');
        };
    });

};


