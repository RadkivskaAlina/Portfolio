$(document).ready(function(){
    $('#phone').mask("(999) 99 99 999");

    document.querySelector('#check_phone_btn')
        .addEventListener('click', () => {
            let phoneToFind = document.querySelector('#phone_to_find').value;
            Connection.getInfoByPhone(phoneToFind);

        });

})