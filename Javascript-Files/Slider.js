let Translating = document.querySelectorAll('.Translating');
let imageContent = document.querySelectorAll('.image-content img');
let contentimagecontent = document.querySelectorAll('.content-image-content');
let opacity = document.querySelectorAll('.opacity');

let counter = 0;


function reloadimage(){


    imageContent.forEach((item)=>{
        item.style.display = 'none';
        item.classList.remove('active');
    })

    contentimagecontent.forEach((item)=>{
        item.style.display = 'none';
        item.classList.remove('active');
    })

    contentimagecontent[counter].classList.add('active');
    imageContent[counter].classList.add('active');
    imageContent[counter].classList.add('Slider-image');
    
    Translating.forEach((item)=>{

        item.classList.add('mangetranslate');

        item.addEventListener('animationend' , function(){

            this.classList.remove('mangetranslate');

        });
    });


}

window.addEventListener('load' , function(){

    reloadimage();
});

setInterval(()=>{

    counter++;

    if(counter > imageContent.length - 1){

        counter = 0;
    }

    reloadimage();

} , 8000)