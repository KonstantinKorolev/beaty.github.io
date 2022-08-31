// кнопка с формы на главной странице (заявки)
if (document.querySelector('.feedback__form__btn')) {
    const formBtn = document.querySelector('.feedback__form__btn');
      hamburger = document.querySelector('.hamburger');
      menu = document.querySelector('.menu');
      closeElem = document.querySelector('.menu__close');

      formBtn.onclick = function (event) {
        // отменяем стандартное поведение браузера
        event.preventDefault();
        // считываем данные с формы
        let getName = document.querySelector('.feedback__form-name').value;
        let getPhone = document.querySelector('.feedback__form-phone').value;
        let getEmail = document.querySelector('.feedback__form-email').value;
        let getService = document.querySelector('.feedback__form-service').value;
        // console.log(getName, getPhone, getEmail, getService);
    
        const xhr = new XMLHttpRequest();
        
        let body = 'name=' + encodeURIComponent(getName) + '&phone=' 
        + encodeURIComponent(getPhone) + '&email=' + encodeURIComponent(getEmail) 
        + '&service=' + encodeURIComponent(getService); 
    
        xhr.open("POST", "http://beatysalon/wp-includes/server/vendor.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
        xhr.send(body);
        
        if (xhr.status != 200) {
            console.log(xhr.status + ': ' + xhr.statusText);
        }
    };
};

// кнопка "Список всех заявок" с личного кабинета Администратора
if (document.querySelector('.adminlk__btn')) {
    const adminLkBtn = document.querySelector('.adminlk__btn');

    adminLkBtn.onclick = () => {
        window.location.href = "http://beatysalon/список-всех-заявок/";
    }
};

// кнопка с формы личный кабинет Администратора
if (document.querySelector('.login__form__btn')) {
    const adminFormBtn = document.querySelector('.login__form__btn');

    adminFormBtn.onclick = function (event) {
        event.preventDefault();
    
        let getLogin = document.querySelector('.login__form__nickname').value;
        let getPassword = document.querySelector('.login__form__password').value;
    
        const xhr = new XMLHttpRequest();
    
        let body = 'login=' + encodeURIComponent(getLogin) + '&pass=' + encodeURIComponent(getPassword);
    
        xhr.open("POST", "http://beatysalon/wp-includes/server/admin.php", false);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
        xhr.send(body);
    
        let url = JSON.parse(xhr.responseText);
        if (url.Error != "null") {
            alert(url.Error);
        }
        window.location.href = url.URL;
    };
};

// если есть кнопки удаления заявок на странице, то привязываем обработчики событий
if (document.querySelectorAll('.applications__btn__icon-delete')) {
    let allButtons = document.querySelectorAll('.applications__btn__icon-delete');

    for (let i = 0; i < allButtons.length; i++) {
        allButtons[i].addEventListener('click', function() {
            let tempParent = this.parentElement;
            let parent = tempParent.parentElement;
            let text = parent.textContent;
            let regexTemp = text.match('id: [0-9]+');
            let id = regexTemp[0].substring(3);
            
            const xhr = new XMLHttpRequest();
            
            let body = 'id=' + encodeURIComponent(id); 
        
            xhr.open("POST", "http://beatysalon/wp-includes/server/deleteApplication.php", false);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
            xhr.send(body);
        
            if (xhr.status != 200) {
                window.location.reload(true);
            }
        });
    }
};

if (document.querySelector('.hamburger') && document.querySelector('.menu')
    && document.querySelector('.menu__close')) {
    const hamburger = document.querySelector('.hamburger');
    menu = document.querySelector('.menu');
    closeElem = document.querySelector('.menu__close');

    hamburger.addEventListener('click', () => {
    menu.classList.add('active');
    });

    closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
    });
};