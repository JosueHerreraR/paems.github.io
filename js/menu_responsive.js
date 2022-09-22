const selectElement = function(element) {
    return document.querySelector(element);
}


let menuToggle = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggle.addEventListener('click', function(){
    body.classList.toggle('open');
})

//Submenu preparatorias

(function(){
    const listElements = document.querySelectorAll('.nav-item--show');

    const addClick = ()=>{
        listElements.forEach(element =>{
            element.addEventListener('click', ()=>{
                let subMenu = element.children[1];
                let height = 0;
                element.classList.toggle('nav-item--active');

                if(subMenu.clientHeight === 0){
                    height = subMenu.scrollHeight;
                }
                subMenu.style.height = `${height}px`;
            });
        });
    }

    window.addEventListener('resize', ()=>{
        if(window.innerWidth > 800){
            deleteStyleHeight();
            if(list.classList.contains('nav-links--show'))
                list.classList.remove('nav-links--show');
        }else{
            addClick();
        }
    });

    if(window.innerWidth <= 800){
        addClick();
    }
    menu.addEventListener('click', ()=> list.classList.toggle('nav-links--show'));
})();