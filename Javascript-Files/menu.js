let burger = document.querySelector('.burger');

let menuList = document.querySelector('.counter-linke');

let menu = document.querySelector('.nav-links');

const navigator = () =>{
    


    let counterList  =  menuList.getBoundingClientRect().height;

    let containerHight =  menu.getBoundingClientRect().height;


    if(counterList === 0){

        menuList.style.height = `${containerHight}px`;

    }else{

        menuList.style.height = 0;
    }

}

burger.addEventListener('click' , navigator);



const dropdownclick = document.querySelectorAll('.dropdown');


dropdownclick.forEach(item=>{

    item.addEventListener('click',()=>{

        let classlis = "." +  item.getAttribute('class') + " " + ".conter-linke-dropdown";

        let select = item.querySelector(classlis);

        let SelectMenu = select.getAttribute('data-menu');

        let select_drop_down =  document.querySelector(SelectMenu);
        
        select_drop_down.style.display = "block";

        let counterList  =  select.getBoundingClientRect().height;
    
        let containerHight =  select_drop_down.getBoundingClientRect().height;



        if(counterList === 0){

            select.style.height = `${containerHight}px`;



            if(select.style.height > "0px"){

                menuList.style.height = "auto";

            }


        }else{
    
            select.style.height = 0;

            select_drop_down.style.display = "none";
        }
        
        

    });
    

})