
const deleteWhiteSpaces = (text = '') => {
    if (text.length > 0 && text[0] === ' ') text = text.trimStart();
    return text;
};

const showAlertMessage = (textAlert, message) => {
    textAlert.innerText = message;
    textAlert.classList.remove('hidden');
};

const hiddenMessage = (textAlert) => textAlert.classList.add('hidden');

const onlyLetters = /[^a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]/g;
const onlyNumbers = /[^0-9]/g;

if (window.location.search === '') {

    const alertCel = document.getElementById('alert_index_cel');

    //Formulario página index
    document.getElementById('nombresIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyLetters, ''));
    document.getElementById('emailIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));
    document.getElementById('messageIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('celularIndex').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (e.target.value[0] !== '9') {
            document.getElementById('celularIndex').classList.add('border-red-600', 'text-red-600');
            showAlertMessage(alertCel, 'El número debe empezar con 9');
            if (e.target.value === '') showAlertMessage(alertCel, 'Debe ingresar su número');
        } else {
            document.getElementById('celularIndex').classList.remove('border-red-600', 'text-red-600');
            hiddenMessage(alertCel);
        }
    });

} else {

    // Contacto.php
    const primerDigitoPermitido = ['2', '3', '4', '5', '6', '7'];

    // Formulario Persona natural
    const personaNombres = document.getElementById('nombresPersona');
    const personaEmail = document.getElementById('emailPersona');

    personaNombres.addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyLetters, ''));
    personaEmail.addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('telefonoPersona').addEventListener('input', (e) => {

        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (!primerDigitoPermitido.includes(e.target.value[0]) && e.target.value !== '') {
            document.getElementById('telefonoPersona').classList.add('border-2', 'border-red-600', 'text-red-500');
            showAlertMessage(document.getElementById('alert_phone_persona'), 'Por favor, ingrese un número válido');
        } else {
            document.getElementById('telefonoPersona').classList.remove('border-2', 'text-red-500');
            hiddenMessage(document.getElementById('alert_phone_persona'));
        }
    });

    document.getElementById('celularPersona').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (e.target.value[0] !== '9' || e.target.value === '') {
            document.getElementById('celularPersona').classList.add('border-2', 'border-red-600', 'text-red-500');
            showAlertMessage(document.getElementById('alert_cel_persona'), 'El número debe empezar con 9');
            if (e.target.value === '') showAlertMessage(document.getElementById('alert_cel_persona'), 'Debe ingresar su número celular');
        } else {
            document.getElementById('celularPersona').classList.remove('border-2', 'text-red-500');
            hiddenMessage(document.getElementById('alert_cel_persona'));
        };
    });


    //Formulario Empresa
    document.getElementById('empresa').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('ruc').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (e.target.value[0] !== '2' && e.target.value !== '') {
            document.getElementById('ruc').classList.add('border-2', 'border-red-600', 'text-red-600');
            showAlertMessage(document.getElementById('alert_ruc'), 'Ingrese un RUC válido');
        } else {
            document.getElementById('ruc').classList.remove('border-2', 'text-red-500');
            hiddenMessage(document.getElementById('alert_ruc'));
        };
    });

    document.getElementById('cargo').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));
    document.getElementById('emailEmpresa').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('telefonoEmpresa').addEventListener('input', (e) => {

        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (!primerDigitoPermitido.includes(e.target.value[0]) && e.target.value !== '') {
            document.getElementById('telefonoEmpresa').classList.add('border-2', 'border-red-600', 'text-red-500');
            showAlertMessage(document.getElementById('alert_phone_empresa'), 'Por favor, ingrese un número válido');
        } else {
            document.getElementById('telefonoEmpresa').classList.remove('border-2', 'text-red-500');
            hiddenMessage(document.getElementById('alert_phone_empresa'));
        }
    });

    document.getElementById('celularEmpresa').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(onlyNumbers, '');

        if (e.target.value[0] !== '9' || e.target.value === '') {
            document.getElementById('celularEmpresa').classList.add('border-2', 'border-red-600', 'text-red-500');
            showAlertMessage(document.getElementById('alert_cel_empresa'), 'El número debe empezar con 9');
            if (e.target.value === '') showAlertMessage(document.getElementById('alert_cel_empresa'), 'Debe ingresar su número celular');
        } else {
            document.getElementById('celularEmpresa').classList.remove('border-2', 'text-red-500');
            hiddenMessage(document.getElementById('alert_cel_empresa'));
        };
    });

};


