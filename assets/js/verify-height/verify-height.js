// Script para verificar quando está com a altura do scroll-container baixa

// 1. Verificar scroll horizontal
// 2. Dentro de scroll horizontal, verificar cada um dos itens se suas item-desc são maiores do que 54.1px
// Se sim, aumenta o scroll horizontal em 30px

const scrollHorizontals = document.querySelectorAll(".scroll-horizontal-container");

scrollHorizontals.forEach(scrollHorizontal => {

    let descs = document.querySelectorAll(".scroll-horizontal-container > .subject-item > .subject-desc")

    descs.forEach(desc => {
        let alturaDesc = desc.clientHeight;

        if(alturaDesc > 68){
            scrollHorizontal.style = ""
        }

    });
    
});
