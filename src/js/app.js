document.addEventListener('DOMContentLoaded', function(){

    eventlisteners();
    darkmode();

});


function eventlisteners(){
    const mobilemenu= document.querySelector('.mobile-menu');
    mobilemenu.addEventListener('click', navegacion)
}

function navegacion(){
    const navegacionblock= document.querySelector('.navegacion');
    // if(navegacionblock.classList.contains('mostrar')){
    //     navegacionblock.classList.remove('mostrar');
    // }else{
    //     navegacionblock.classList.add('mostrar');
    // }

    navegacionblock.classList.toggle('mostrar');
}

function darkmode(){
    const pdarkmode = window.matchMedia('(prefers-color-scheme: dark)'); // lee las preferencias de usuario

    if(pdarkmode.matches){
        document.body.classList.add('dark-mode');

    }else{
        document.body.classList.remove('dark-mode');
    }


    const dark = document.querySelector('.dark-mode-boton')
    dark.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}