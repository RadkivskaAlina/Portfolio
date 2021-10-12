class Page{
    constructor(){
        this.add = document.getElementById('add_user');
        this.check = document.getElementById('check_user');
        this.choose = document.querySelectorAll('.choose_service__choose input');
        this.title = document.querySelector('.service__title');
        this.result = document.querySelector('.second_result');
    }
    chooseAnimation(){
        for(let i = 0; i < this.choose.length; i++){
            this.choose[i].addEventListener('click', () => {
                for(let j = 0; j < this.choose.length; j++){
                    this.choose[j].removeAttribute('checked');
                }
                this.choose[i].setAttribute('checked', '1');
                this.result.classList.add('draft');
                this.switchChoose(this.choose[i]);
                this.changeForm(i);
            });
        }
    }
    switchChoose(item){
        if(this.check.getAttribute('selected') == 1){
            this.result.classList.add('draft');
            if(item.value == 1){
                this.title.classList.add('animate');
                setTimeout(() => {
                    this.title.innerHTML = 'Перевірити номер';
                    this.title.classList.remove('animate');
                }, 700);
            } else if(item.value == 2){
                this.title.classList.add('animate');
                setTimeout(() => {
                    this.title.innerHTML = 'Перевірити організацію';   
                    this.title.classList.remove('animate');
                }, 700);
            } 
        } else if(this.add.getAttribute('selected') == 1){
            this.result.classList.add('draft');
            if(item.value == 1){
                this.title.classList.add('animate');
                setTimeout(() => {
                    this.title.innerHTML = 'Додати номер у спам';
                    this.title.classList.remove('animate');
                }, 700);
            } else{
                this.title.classList.add('animate');
                setTimeout(() => {
                    this.title.innerHTML = 'Додати організацію у спам';
                    this.title.classList.remove('animate');
                }, 700);
            }
        }
    }
    toCheck(){
        this.add.addEventListener('click', () => {
            this.check.classList.remove('active');
            this.add.classList.add('active');
            this.check.removeAttribute('selected');
            this.add.setAttribute('selected', '1');
            for(let i = 0; i < this.choose.length; i++){
                if(this.choose[i].getAttribute('checked') == 1){
                    this.result.classList.add('draft');
                    this.switchChoose(this.choose[i]);
                    this.changeForm(i);
                }
            }
        });
    }
    toAdd(){
        this.check.addEventListener('click', () => {
            this.check.classList.add('active');
            this.add.classList.remove('active');
            this.add.removeAttribute('selected');
            this.check.setAttribute('selected', '1');
            for(let i = 0; i < this.choose.length; i++){
                if(this.choose[i].getAttribute('checked') == 1){
                    this.result.classList.add('draft');
                    this.switchChoose(this.choose[i]);
                    this.changeForm(i);
                }
            }
        });
    }
    changeForm(index){
        let form = document.getElementsByClassName('form');
        for(let j = 0;  j < form.length; j++){
            this.result.classList.add('draft');
            form[j].classList.add('draft')
        }
        if(this.check.getAttribute('selected') == 1){
            form[index].classList.remove('draft');
        } else if(this.add.getAttribute('selected') == 1){
            form[index+2].classList.remove('draft');
        }
    }
    hideSection(){
        let hideBtn = document.getElementById('hide_section');
        let openBtn = document.getElementById('open_section');
        let section = document.querySelector('.thrid');
        let main = document.querySelector('.main');
        hideBtn.addEventListener('click', () => {
            section.classList.add('draft');
            main.classList.remove('main');
            main.classList.add('main2');
            hideBtn.classList.add('draft');
            openBtn.classList.remove('draft');
        });
    }
    openSection(){
        let hideBtn = document.getElementById('hide_section');
        let openBtn = document.getElementById('open_section');
        let section = document.querySelector('.thrid');
        let main = document.querySelector('.main');
        openBtn.addEventListener('click', () => {
            section.classList.remove('draft');
            main.classList.add('main');
            main.classList.remove('main2');
            hideBtn.classList.remove('draft');
            openBtn.classList.add('draft');
        });
    }
    openCommentArea(){
        let addBtn = document.getElementById('add_btn');
        let okBtn = document.getElementById('ok_btn');
        let closeBtn = document.getElementById('close_btn');
        let input = document.getElementById('new_comment');
        addBtn.addEventListener('click', () => {
            input.classList.remove('draft');
            okBtn.classList.remove('draft');
            closeBtn.classList.remove('draft');
        });
    }
    closeCommentArea() {
        let okBtn = document.getElementById('ok_btn');
        let closeBtn = document.getElementById('close_btn');
        let input = document.getElementById('new_comment');
        closeBtn.addEventListener('click', () => {
            input.classList.add('draft');
            okBtn.classList.add('draft');
            closeBtn.classList.add('draft');
        });
    }
    openResultBySearch(){
        let searchBtn = document.querySelectorAll('.form button');
        for(let i = 0; i < searchBtn.length; i++){
            searchBtn[i].addEventListener('click', () => {
                searchBtn[i].parentNode.classList.add('draft');
                this.result.classList.remove('draft');
            })
        }
    }
    showLanguageItems(){
        let showBtn = document.querySelector('.language_select');
        let languageItems = document.querySelector('.language_select_items');
        showBtn.addEventListener('mouseover', () => {
            languageItems.classList.remove('draft');
        });;
        languageItems.addEventListener('mouseover', () => {
            languageItems.classList.remove('draft');
        });
        showBtn.addEventListener('mouseleave', () => {
            languageItems.classList.add('draft');
        })
        languageItems.addEventListener('mouseleave', () => {
            languageItems.classList.add('draft');
        })
    }
    selectLanguage(){
        let languageSelected = document.querySelector('.language_selected');
        let languageItem = document.querySelectorAll('.language_select_item');
        let languageItemText = document.querySelectorAll('.language_select_item p');
        let languageItemImg = document.querySelectorAll('.language_select_item svg');
        for(let i = 0; i < languageItem.length; i++){
            languageItem[i].addEventListener('click', () => {
                for(let j = 0; j < languageItemImg.length; j++){
                    languageItemImg[j].classList.add('draft');
                }
                languageItemImg[i].classList.remove('draft');
                languageSelected.innerHTML = languageItemText[i].innerHTML;
            })
        }
    }
    changeTheme(){
        let light = document.querySelector('#sun');
        let dark = document.querySelector('#moon');
        light.addEventListener('click', () => {
            light.classList.add('draft');
            dark.classList.remove('draft');
            this.addDarkTheme();
        });
        dark.addEventListener('click', () => {
            light.classList.remove('draft');
            dark.classList.add('draft');
            this.removeDarkTheme();
        });
    }
    addDarkTheme(){
        let body = document.querySelector('body');
        body.classList.add('night');
    }
    removeDarkTheme(){
        let body = document.querySelector('body');
        body.classList.remove('night');
    }
};
let page = new Page;
page.chooseAnimation();
page.hideSection();
page.openSection();
page.toCheck();
page.toAdd();
page.openCommentArea();
page.closeCommentArea();
page.openResultBySearch();
page.showLanguageItems();
page.selectLanguage();
page.changeTheme();