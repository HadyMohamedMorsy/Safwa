let burger = document.querySelector('.burger');
let burgermenu = document.querySelector('.burger-menu');
let menu = document.querySelector('.menu');
let nav = document.querySelector('.nav');
let headercover = document.querySelector('.header-cover');
let parentlist = document.querySelectorAll('.parent-list li');

// burger
burger.addEventListener('click' ,showMenu);
burgermenu.addEventListener('click' , showhome)

function showMenu(){
    menu.style.display = 'block';
    burger.style.opacity = '0';
    nav.classList.add('active');
    headercover.classList.add('active');
    parentlist.forEach((item , index)=>{
        let coulecte = index * 0.1;
        item.style.animation = `secoundtranslate ${(1 + coulecte)}s  linear`;
    })
}

function showhome(){
    menu.style.display = 'none';
    burger.style.opacity = '1';
    nav.classList.remove('active');
    headercover.classList.remove('active');
}