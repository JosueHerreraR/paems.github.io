// Usado en el Inicio de página

document.addEventListener('DOMContentLoaded', launchCookieAdvisor);

function launchCookieAdvisor(){
    var capaCookies = document.createElement('div');
    capaCookies.innerHTML = '<p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continua navegando, consideramos que acepta su uso. <span>Aceptar</span></p>';
    capaCookies.classList.add('avisoCookies');
    var todosLosSpanEnDiv = capaCookies.getElementsByTagName('span');
    todosLosSpanEnDiv.item(0).addEventListener('click', function(){
        capaCookies.parentElement.removeChild(capaCookies);
    });
    document.body.appendChild(capaCookies);
}