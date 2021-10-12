class Page{
    searchInput(){
        let input = document.querySelector('.header__search__input');
        if(input !== null){
            input.addEventListener('focus', function(){
                input.setAttribute('value', '');
                input.setAttribute('placeholder', 'Search...');
            })
        }
    }
    deleteAdvertising(){
        let advertising = document.querySelector('.main__menu__advertising');
        let closeBtn = document.querySelector('.main__menu__advertising__close');
        if(closeBtn !== null){
            closeBtn.addEventListener('click', () => {
                advertising.parentElement.innerHTML = '';
            });
        }
    }
    slider(){
        let item = document.querySelectorAll('.animate');
        for(let j = 0; j < item.length; j++){
            let number = 0;
            setInterval(() => {
                if(number < 210){
                    let i = 1;
                    setInterval(() => {
                        if(i < 31){
                        item[j].setAttribute(`style`, `width:360px; height:130px; overflow: hidden; margin-left: -${number}px`);  
                            number++;
                            i++;
                        }
                    }, 10);
                } else{
                    number = 8;
                    item[j].setAttribute(`style`, `width:360px; height:130px; overflow: hidden; margin-left: -${number}px`);
                    number = 0;
                }
            }, 5000);
        }
    }
    burgerClick(){
        let burger = document.querySelector('#burger');
        let menu = document.querySelector('.main__wrapper');
        let header = document.querySelector('.header__logo');
        if(burger !== null){
            burger.addEventListener('click', () =>{
                if(burger.getAttribute('class', 'active')){
                    burger.removeAttribute('class');
                    menu.classList.remove('min');
                    header.classList.remove('min');
                } else {
                    burger.setAttribute('class', 'active');
                    menu.classList.add('min');
                    header.classList.add('min');
                }
            })
        }
    }
    menuClick(){
        let menuBtn = document.querySelectorAll('.main__menu__btn');
        let menuIcon = document.querySelectorAll('.main__menu__btn svg path');
        for(let i = 0; i < menuBtn.length; i++){
            if(menuBtn[i] !== null){
                menuBtn[i].addEventListener('click', () => {
                    for(let j = 0; j < menuBtn.length; j++){
                        menuBtn[j].classList.remove('active');
                        menuIcon[j].classList.remove('active');
                        console.log(menuBtn[j]);
                    };
                    menuBtn[i].classList.add('active');
                    menuIcon[i].classList.add('active');
                });
            }
        };
    }
    modalClick(){
        let moreBtn = document.querySelector('#more');
        let moreModal = document.querySelector('#more_modal');
        let closeMoreBtn = document.querySelector('#more_modal .header__avatar__modal__close');
        let openBtn = document.querySelector('#open');
        let openModal = document.querySelector('#open_modal');
        let closeOpenBtn = document.querySelector('#open_modal .header__avatar__modal__close');
        if(moreBtn !== null){
            moreBtn.addEventListener('click', () => {
                moreModal.classList.remove('draft');
                setTimeout(() => {
                    closeMoreBtn.classList.remove('draft');
                }, 300);
            });
        }
        if(closeMoreBtn !== null){
            closeMoreBtn.addEventListener('click', () => {
                closeMoreBtn.classList.add('draft');
                setTimeout(() => {
                    moreModal.classList.add('draft');
                }, 300);
            });
        }
        if(openBtn !== null){
            openBtn.addEventListener('click', () => {
                openModal.classList.remove('draft');
                setTimeout(() => {
                    closeOpenBtn.classList.remove('draft');
                }, 300);
            });
        }
        if(closeOpenBtn !== null){
            closeOpenBtn.addEventListener('click', () => {
                closeOpenBtn.classList.add('draft');
                setTimeout(() => {
                    openModal.classList.add('draft');
                }, 300);
            });
        }
    }
    inputFocus(){
        let input = document.querySelectorAll('.default_input');
        let label = document.querySelectorAll('.default_input__label__draft');
        for(let i = 0; i < input.length; i++){
            if(input[i] !== null){
                input[i].addEventListener('focus', () => {
                    label[i].classList.remove('default_input__label__draft');
                    label[i].classList.add('default_input__label__active');
                    input[i].removeAttribute('value');
                })
            }
        }
    }
    elementAnimate(){
        let element = document.querySelectorAll('.main__content__bottom__campaign__element');
        for(let i = 0; i < element.length; i++){
            if(element[i] !== null){
                setInterval(() => {
                    if(element[i].classList.contains('hover')){
                        element[i].classList.remove('hover');
                    } else {
                        element[i].classList.add('hover');
                    }
                }, 1000)
            }
        }
        
    }
    loginSlider(){
        let slider = document.querySelector('.right__slider');
        let marker = document.querySelectorAll('.slider__mark');
        let number = 0;
        let slide_n = 1;
        if(slider !== null){
            setInterval(() => {
                if(slide_n < 3){
                    number = 975 * slide_n;
                    slider.setAttribute(`style`, `margin-left: -${number}px`);  
                    console.log(slider);
                    slide_n++;
                    for(let j = 0; j < marker.length; j++){
                        marker[j].classList.remove('active');
                    }
                    marker[slide_n - 1].classList.add('active');
                } else{
                    slide_n = 1;
                    number = 0;
                    slider.setAttribute(`style`, `margin-left: -${number}px`);
                    for(let j = 0; j < marker.length; j++){
                        marker[j].classList.remove('active');
                    }
                    marker[slide_n - 1].classList.add('active');
                }
            }, 5000);
        }
    }
    
}
let page = new Page;
page.searchInput();
page.deleteAdvertising();
page.slider();
page.burgerClick();
page.menuClick();
page.modalClick();
page.inputFocus();
page.elementAnimate();
page.loginSlider();