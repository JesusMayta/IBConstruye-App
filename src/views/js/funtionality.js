//Silder images
const imagesSlider = ['banner4.png', 'banner6.png', 'banner7.jpg', 'banner8.jpg'];

//Div slider
const slider = document.getElementById('slider');

setInterval(() => {
    const randomeImage = Math.floor(Math.random() * 4);
    slider.style.backgroundImage = `url("src/views/assets/slider_images/${imagesSlider[randomeImage]}")`;
}, 3000);


//Responsive menu
const menuButton = document.getElementById('button_menu');
const closeMenuButton = document.getElementById('button_close_menu');
const movileList = document.getElementById('movile_list');
const opacityMenu = document.getElementById('menu_opacity');
const clickDirection = document.getElementById('click_direction');


clickDirection.addEventListener('click', () => {
    movileList.classList.remove('-translate-x-32');
    movileList.classList.add('translate-x-44')
    opacityMenu.classList.add('hidden');
});


menuButton.addEventListener('click', () => {

    movileList.classList.remove('translate-x-44');
    movileList.classList.add('-translate-x-32');
    opacityMenu.classList.remove('hidden');
});

closeMenuButton.addEventListener('click', () => {
    movileList.classList.remove('-translate-x-32');
    movileList.classList.add('translate-x-44')
    opacityMenu.classList.add('hidden');
});


//Option form

const optionTipo = document.getElementById('tipoPersona');
const personaNatural = document.getElementById('form_persona_natural');
const personaEmpresa = document.getElementById('form_persona_empresa');
const restForm = document.getElementById('form_general');

optionTipo.addEventListener('change', (e) => {

    switch (e.target.value) {
        case 'personaNatural':
            personaNatural.classList.remove('hidden')
            personaEmpresa.classList.add('hidden');
            restForm.classList.remove('hidden');
            break;
        case 'personaEmpresa':
            personaNatural.classList.add('hidden')
            personaEmpresa.classList.remove('hidden');
            restForm.classList.remove('hidden');
            break;
        case 'unselect':
            personaEmpresa.classList.add('hidden');
            personaEmpresa.classList.add('hidden');
            restForm.classList.add('hidden');
            break;
    };
});