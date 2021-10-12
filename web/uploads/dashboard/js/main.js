class Page{
    menuBtnClick(){
        let btnsItems = document.querySelectorAll('.menu_wrapper a');
        let mark = document.querySelector('.active_menu_btn');
        for(let i = 0; i < btnsItems.length; i++){
            btnsItems[i].addEventListener('click', function(){
                if(i != 0){
                    mark.setAttribute("style", `top: ${69*i+27}px;`);
                } else{
                    mark.setAttribute("style", "top: 27px;");
                }
            })
        }
    }
    toggleProfileModal(){
        let btn = document.querySelector('.header_user_avatar_arrow');
        let modal = document.querySelector('.header_user_bottom');
        btn.addEventListener('click', function(){
            console.log(btn);
            if(btn.getAttribute('active')){
                console.log(btn);
                btn.classList.remove('active');
                btn.removeAttribute('active');
                modal.classList.remove('active');
                modal.removeAttribute('active');
            } else{
                btn.classList.add('active');
                btn.setAttribute('active', '1');
                modal.classList.add('active');
                modal.setAttribute('active', '1');
            }
        });
    }
}
let page = new Page;
page.menuBtnClick();
page.toggleProfileModal();