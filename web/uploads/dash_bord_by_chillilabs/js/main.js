class Page{
    menuBtns(){
        let btns = document.querySelectorAll('.menu_navigation_btn');
        for(let i = 0; i < btns.length; i++){
            btns[i].addEventListener('click', function(){
                let btnsPath = document.querySelectorAll(`.menu_navigation_btn path`);
                for(let j = 0; j < btns.length; j++){
                    btns[j].classList.remove('active');
                    for(let l = 0; l < btnsPath.length; l++){
                        btnsPath[l].setAttribute('stroke', '#969CBA');
                        btnsPath[l].setAttribute('fill', '#969CBA');
                    }
                };
                btns[i].classList.add('active');
                let btnPath = document.querySelectorAll(`#${btns[i].getAttribute('id')} path`);
                for(let l = 0; l < btnPath.length; l++){
                    btnPath[l].setAttribute('stroke', '#713BDB')
                    btnPath[l].setAttribute('fill', '#713BDB');
                }
            })
        }
    }
    iconAnimate(element){
            element.classList.add('rotate_30_right');
            setTimeout(()=>{
                element.classList.remove('rotate_30_right');
                element.classList.add('rotate_30_left');
            }, 400);
            setTimeout(()=>{
                element.classList.remove('rotate_30_left');
                element.classList.add('rotate_20_right');
            }, 900);
            setTimeout(()=>{
                element.classList.remove('rotate_20_right');
                element.classList.add('rotate_20_left');
            }, 1200);
            setTimeout(()=>{
                element.classList.remove('rotate_20_left');
                element.classList.add('rotate_10_right');
            }, 1400);
            setTimeout(()=>{
                element.classList.remove('rotate_10_right');
                element.classList.add('rotate_0_left');
            }, 1600);
            element.removeAttribute('class');
    }
    openModal(){
        let headerbtn = document.querySelector('.header_user');
        let modal = document.querySelector('.header_user_modal');
        let icons = document.querySelector('.header_icons');
        let arrow = document.querySelector('.header_user_arrow');
        headerbtn.addEventListener('click', function(){
            if(modal.getAttribute("hide")){
                modal.removeAttribute('hide');
                modal.classList.remove('hide');
                arrow.classList.remove('hide');
                icons.classList.add('hide');
            } else{
                modal.setAttribute('hide', '1');
                modal.classList.add('hide');
                arrow.classList.add('hide');
                icons.classList.remove('hide');
            }
        })
    }
}
page = new Page;
page.menuBtns();
page.openModal();