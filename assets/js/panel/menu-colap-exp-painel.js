function showPage(menuId) {
    const menu = document.getElementById(menuId);
    const mattersContainer = document.querySelector('.matters-container');
    const dataContainer = document.querySelector('.data-container');

    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "block";
        
        mattersContainer.classList.add('matters-container--collapsed');
        mattersContainer.classList.remove('matters-container--expanded');
        
        dataContainer.classList.add('data-container--collapsed');
        dataContainer.classList.remove('data-container--expanded');
        
    } else {
        menu.style.display = "none";
        
        mattersContainer.classList.remove('matters-container--collapsed');
        mattersContainer.classList.add('matters-container--expanded');
        
        dataContainer.classList.remove('data-container--collapsed');
        dataContainer.classList.add('data-container--expanded');
    }
}