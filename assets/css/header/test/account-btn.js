// Quando eu apertar no botão de conta, irá aparecer um menu de conta

// Como fazer? 

// Primeiro capturar elemento account-button no JS

let accountBtn = document.querySelector('.account-btn');

//1.1 Capturar o elemento do menu

let accountMenu = document.querySelector('.account-menu-container')
let accountBtnMenu = document.querySelector('nav.account-menu-container .account-btn');

console.log(accountBtn) //Elemento capturado!
console.log(accountMenu) //Elemento capturado!
console.log(accountBtnMenu) //Elemento capturado!
//Segundo ao apertar no botão, deve exibir o elemento do menu de conta

accountBtn.addEventListener('click', () =>{
    accountMenu.classList.remove('hidden'); //Está exibindo mas não retorna quando aperta de novo
    accountBtn.classList.add('hidden');
})

//Esconde o menu
accountBtnMenu.addEventListener('click', () => {
    accountMenu.classList.add('hidden');
    accountBtn.classList.remove('hidden');
})

// Terceiro quando apertar no botão de dentro deve voltar para o botão do início escondendo o menu

// Duas formas de fazer: 
// Captura o botão de dentro e quando aperta nele deixa de exibir

// Ou captura o elemento de fora antes de exibir, coloca-o dentro do menu e quando aperta nele, sabendo que não possui a classe, vai colocá-la para esconder, e retorna o botão para a tag superior
