
const deleteWhiteSpaces = (text = '') => {
    if (text.length > 0 && text[0] === ' ') text = text.trimStart();
    return text;
};

if (window.location.search === '') {

    //Formulario página index
    document.getElementById('nombresIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]/g, ''));
    document.getElementById('emailIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));
    document.getElementById('messageIndex').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

} else {

    // Contacto.php
    const primerDigitoPermitido = ['2', '3', '4', '5', '6', '7'];

    // Formulario Persona natural
    const personaNombres = document.getElementById('nombresPersona');
    const personaEmail = document.getElementById('emailPersona');

    personaNombres.addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]/g, ''));
    personaEmail.addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('telefonoPersona').addEventListener('input', (e) => {

        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (!primerDigitoPermitido.includes(e.target.value[0]) && e.target.value !== '') {
            document.getElementById('alert_phone_persona').innerText = 'Por favor, ingrese un número válido';
            document.getElementById('telefonoPersona').classList.add('border-2', 'border-red-600', 'text-red-500');
            document.getElementById('alert_phone_persona').classList.remove('hidden');
        } else {
            document.getElementById('alert_phone_persona').classList.add('hidden');
            document.getElementById('telefonoPersona').classList.remove('border-2', 'text-red-500');
        }
    });

    document.getElementById('celularPersona').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (e.target.value[0] !== '9' || e.target.value === '') {
            document.getElementById('alert_cel_persona').innerText = 'El número debe empezar con 9';
            document.getElementById('celularPersona').classList.add('border-2', 'border-red-600', 'text-red-500');
            document.getElementById('alert_cel_persona').classList.remove('hidden');
            if (e.target.value === '') document.getElementById('alert_cel_persona').innerText = 'Debe ingresar su número celular';
        } else {
            document.getElementById('alert_cel_persona').classList.add('hidden');
            document.getElementById('celularPersona').classList.remove('border-2', 'text-red-500');
        };
    });


    //Formulario Empresa
    document.getElementById('empresa').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('ruc').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (e.target.value[0] !== '2' && e.target.value !== '') {
            document.getElementById('alert_ruc').innerText = 'Ingrese un RUC válido';
            document.getElementById('ruc').classList.add('border-2', 'border-red-600', 'text-red-500');
            document.getElementById('alert_ruc').classList.remove('hidden');
        } else {
            document.getElementById('alert_ruc').classList.add('hidden');
            document.getElementById('ruc').classList.remove('border-2', 'text-red-500');
        };
    });

    document.getElementById('cargo').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));
    document.getElementById('emailEmpresa').addEventListener('input', (e) => e.target.value = deleteWhiteSpaces(e.target.value));

    document.getElementById('telefonoEmpresa').addEventListener('input', (e) => {

        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (!primerDigitoPermitido.includes(e.target.value[0]) && e.target.value !== '') {
            document.getElementById('alert_phone_empresa').innerText = 'Por favor, ingrese un número válido';
            document.getElementById('telefonoEmpresa').classList.add('border-2', 'border-red-600', 'text-red-500');
            document.getElementById('alert_phone_empresa').classList.remove('hidden');
        } else {
            document.getElementById('alert_phone_empresa').classList.add('hidden');
            document.getElementById('telefonoEmpresa').classList.remove('border-2', 'text-red-500');
        }
    });

    document.getElementById('celularEmpresa').addEventListener('input', (e) => {
        e.target.value = deleteWhiteSpaces(e.target.value).replace(/[^0-9]/g, '');

        if (e.target.value[0] !== '9' || e.target.value === '') {
            document.getElementById('alert_cel_empresa').innerText = 'El número debe empezar con 9';
            document.getElementById('celularEmpresa').classList.add('border-2', 'border-red-600', 'text-red-500');
            document.getElementById('alert_cel_empresa').classList.remove('hidden');
            if (e.target.value === '') document.getElementById('alert_cel_empresa').innerText = 'Debe ingresar su número celular';
        } else {
            document.getElementById('alert_cel_empresa').classList.add('hidden');
            document.getElementById('celularEmpresa').classList.remove('border-2', 'text-red-500');
        };
    });

};


