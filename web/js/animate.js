class PageAnimate{
    menuHover(){
        let menuBtn = document.querySelectorAll('.header_list li a');
        let hoverElement = document.querySelector('.header_hover_element');
        for(let i = 0; i < menuBtn.length; i++){
            menuBtn[i].addEventListener('mouseover', () => {
                if(i == 0){
                    hoverElement.setAttribute('style', 'top: 116px');
                    setTimeout(() => {
                        hoverElement.classList.add('active');
                    }, 200);
                } else {
                    hoverElement.setAttribute('style', `top: ${131 + (42 * i)}px`);
                    setTimeout(() => {
                        hoverElement.classList.add('active');
                    }, 200);
                }
            })
            menuBtn[i].addEventListener('mouseout', () => {
                setTimeout(() => {
                    hoverElement.classList.remove('active');
                }, 200);
            })
        }
    }
    burgerMenu(){
        let burger = document.querySelector('.burger_element');
        let menu = document.querySelector('.wrap');
        if(burger !== null){
            burger.addEventListener('click', () =>{
                if(burger.classList.contains('close')){
                    burger.classList.remove('close');
                    menu.classList.remove('min');
                } else{
                    burger.classList.add('close');
                    menu.classList.add('min');
                }
            })
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
    arrowAnimate(){
        let arrow = document.querySelectorAll('.arrow_down');
        for(let i = 0; i < arrow.length; i++){
            setTimeout(() => {
                arrow[i].classList.add('rotate');
                setInterval(() => {
                    arrow[i].classList.add('position');
                }, 500);
                setInterval(() => {
                    arrow[i].classList.remove('position');
                }, 5000);
            }, 1000);
        }
    }
    textAnimate(){
        let title = document.querySelector('.section_lending_title');
        let titleWidth = title.offsetWidth;
        let titleHeight = title.offsetHeight;
        let width = 0;
        setTimeout(() => {
            title.setAttribute('style', `width: 0px; height: ${titleHeight}px; border-right: 2px solid #000;`);
        }, 0);
        setInterval(() => {
            if(width - 19 <= titleWidth){
                title.setAttribute('style', `width: ${width}px; height: ${titleHeight}px; border-right: 2px solid #000;`);
                width = width + 19;
            } else if(width - 19 <= titleWidth+19*2) {
                width = width + 19;
                setTimeout(() => {
                    title.removeAttribute('style');
                }, 200);
                setTimeout(() => {
                    title.setAttribute('style', 'width: max-content; border-right: 2px solid #000');
                }, 600);
                setTimeout(() => {
                    title.removeAttribute('style');
                }, 800);
            }
        }, 200);
    }
}
let page = new PageAnimate;
page.menuHover();
page.burgerMenu();
page.inputFocus();
page.arrowAnimate();
page.textAnimate();