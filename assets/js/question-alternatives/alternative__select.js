const alternatives = document.querySelectorAll(".alternative");
let alternativeSelected = null;


alternatives.forEach(alternative => {
    alternative.addEventListener('click', () => {
        
        if(alternativeSelected != null){
            alternativeSelected.classList.remove('selected')
        }

        alternativeSelected = alternative;
        alternativeSelected.classList.add('selected');
        
        //Testando flag
        //Problema atual: Como fazer para quando apertar nas alternativas ele verifique se os outros possui .selected   
        
    })
})