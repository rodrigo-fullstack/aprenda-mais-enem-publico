// Quando eu apertar no botão de conta, irá aparecer um menu de conta

// Como fazer? 

// Primeiro capturar elemento account-button no JS

let accountBtn = document.querySelector('header li.nav-item > .account-btn');

//1.1 Capturar o elemento do menu

let accountMenu = document.querySelector('.account-menu-container')
let accountBtnMenu = document.querySelector('nav.account-menu-container .account-btn');

// console.log(accountBtn) Elemento capturado!
// console.log(accountMenu) Elemento capturado!
// console.log(accountBtnMenu) Elemento capturado!

//Segundo ao apertar no botão, deve exibir o elemento do menu de conta

accountBtn.addEventListener('click', () =>{
    accountMenu.classList.remove('hidden'); // Aparece o menu
    accountBtn.classList.add('hidden-opct'); // Esconde o botão padrão
})

//Esconde o menu
accountBtnMenu.addEventListener('click', () => {
    //Esconde o menu
    accountMenu.classList.add('hidden');
    //Aparece o botão padrão
    accountBtn.classList.remove('hidden-opct');
})
