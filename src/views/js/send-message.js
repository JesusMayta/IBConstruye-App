
$(document).ready(function () {
    $('#form_index').submit(function (e) {
        e.preventDefault();
        const $form = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: "src/controller/enviar-correo-index.php",
            data: $form,
            beforeSend: function () {
                $('#button_form_index').prop('disabled', true);
                $('#loading_index').removeClass('hidden');
                $('#text_button').text('Enviando...');
            },
            success: function (res) {
                $("#form_index")[0].reset();
                Swal.fire({
                    title: "Bien hecho!",
                    text: 'Mensaje enviado con éxito!',
                    icon: "success"
                });

                $('#button_form_index').removeAttr('disabled');
                $('#loading_index').addClass('hidden');
                $('#text_button').text('Enviar');
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                });
            }
        });
    });

    $('#form_contact_persona').submit(function (e) {
        e.preventDefault();
        const $form = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: "src/controller/enviar-correo-persona.php",
            data: $form,
            beforeSend: function () {
                $('#button_persona').prop('disabled', true);
                $('#loading_persona').removeClass('hidden');
                $('#text_persona').text('Enviando...');
            },
            success: function (res) {

                $("#form_contact_persona")[0].reset();
                Swal.fire({
                    title: "Bien hecho!",
                    text: 'Mensaje enviado con éxito!',
                    icon: "success"
                });

                $('#button_persona').removeAttr('disabled');
                $('#loading_persona').addClass('hidden');
                $('#text_persona').text('Enviar');
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                });
            }
        });
    });

    $('#form_contact_empresa').submit(function (e) {
        e.preventDefault();
        const $form = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: "src/controller/enviar-correo-empresa.php",
            data: $form,
            beforeSend: function () {
                $('#button_empresa').prop('disabled', true);
                $('#loading_empresa').removeClass('hidden');
                $('#text_empresa').text('Enviando...');
            },
            success: function (res) {
                $("#form_contact_empresa")[0].reset();
                Swal.fire({
                    title: "Bien hecho!",
                    text: 'Mensaje enviado con éxito!',
                    icon: "success"
                });

                $('#button_empresa').removeAttr('disabled');
                $('#loading_empresa').addClass('hidden');
                $('#text_empresa').text('Enviar');
            },
            error: function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                });
            }
        });
    });
});