    var buyBtn = document.getElementsByClassName('buy');
    var form = document.getElementById('form');
    var overlay = document.querySelector('.modal-content__overlay');
    var close = form.querySelector('.modal-content__close');
    var item = form.querySelector('.modal-content__item');


    var formTrans = document.getElementById('trans-form');               //Форма перехода в корзину, открывается в baskin.js
    var closeTrans = formTrans.querySelector('.modal-content__close');

    //var storageName = localStorage.getItem('userName');
    //var storagePhone = localStorage.getItem('userPhone');



    for (var i = 0; i < buyBtn.length; i++) {
        buyBtn[i].addEventListener('click', openForm);
    }

    function openForm(event) {
        var width = document.body.offsetWidth;

    if (width > 750) {
        event.preventDefault();
        var id = this.getAttribute('data-id');
        var scrollHeight  = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight);

        //console.log(scrollHeight);
        item.textContent = id;

        //form.style.top = event.clientY + 'px';

        form.classList.add('modal-content--show');
        overlay.classList.add('modal-content--show');
        //userName.focus();
        // if (storageName) {
        //     userName.value = storageName;
        //     userPhone.focus();
        // } else {
        //     userName.focus();
        // }
    }
    }

    //Закрываем форму
    close.addEventListener('click', closeForm);
    closeTrans.addEventListener('click', closeForm);

    function closeForm(event) {
        event.preventDefault();
        form.classList.remove('modal-content--show');
        overlay.classList.remove('modal-content--show');
        formTrans.classList.remove('modal-content--show');
    }
    overlay.addEventListener('click', function(event) {
        event.preventDefault();
        form.classList.remove('modal-content--show');
        overlay.classList.remove('modal-content--show');
        formTrans.classList.remove('modal-content--show');
    });
    window.addEventListener("keydown", function(event) {
		if (event.keyCode === 27) {
		if (form.classList.contains("modal-content--show")) {
	          form.classList.remove("modal-content--show");
              overlay.classList.remove('modal-content--show');
              formTrans.classList.remove('modal-content--show');
		}
		}
	});



    var send = document.getElementById('send');
        send.addEventListener('click', sender);



        function sender(event) {
            event.preventDefault();
            var userName = form.querySelector('[name=name]');
            var userPhone = form.querySelector('[name=phone]');
            var userEmail = form.querySelector('[name=email]');
            var userAgree = form.querySelector('[name=agree]');
            var productId = form.querySelector('.modal-content__item').textContent;
            var error = form.querySelector('#error');

            if (userAgree.checked) {
                userAgree = 1;
            }

            var body = 'name=' + encodeURIComponent(userName.value) + '&phone='+ encodeURIComponent(userPhone.value) +'&email='+ encodeURIComponent(userEmail.value) +'&agree=' + encodeURIComponent(userAgree);

            var xhr = new XMLHttpRequest();
            xhr.open( 'POST', '/product/ajaxChooseOne/' + productId,  true) ;
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send(body);

            xhr.onreadystatechange = function() {
                    if (xhr.responseText == 1) {
                        alert('Ваш заказ отправлен');
                        userName.value = '';
                        userPhone.value = '';
                        userEmail.value = '';
                        form.classList.remove('modal-content--show');
                        overlay.classList.remove('modal-content--show');
                    } else {
                        error.innerHTML = xhr.responseText;
                    }
                    //console.log(xhr.responseText);
                };
            }


//Форма обратной связи на главной

    var call = document.getElementsByClassName('form-callback__btn');
    var form1 = document.querySelector('.form-callback');
    var errors = document.querySelector('.form-callback__errors');

    for (var i = 0; i < call.length; i++) {
        call[i].addEventListener('click', callBack);
    }



        function callBack(event) {
            event.preventDefault();
            var userName = form1.querySelector('[name=name]');
            var userPhone = form1.querySelector('[name=phone]');
            var userEmail = form1.querySelector('[name=email]');
            var userMessage = form1.querySelector('[name=message]');
            var userAgree = form1.querySelector('[name=agree]');
            var error = form1.querySelector('#error');

            if (userAgree.checked) {
                userAgree = 1;
            }

            var body = 'name=' + encodeURIComponent(userName.value) + '&phone='+ encodeURIComponent(userPhone.value) +'&email='+ encodeURIComponent(userEmail.value) +'&message=' + encodeURIComponent(userMessage.value) +'&agree=' + encodeURIComponent(userAgree);

            var xhr = new XMLHttpRequest();
            xhr.open( 'POST', 'send/callBack',  true) ;
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send(body);

            xhr.onreadystatechange = function() {
                    if (xhr.responseText == 1) {
                        console.log(xhr.responseText);
                        form1.classList.add('form-callback--saccess')
                        // userName.value = '';
                        // userPhone.value = '';
                        // userEmail.value = '';
                        // form.classList.remove('modal-content--show');
                        // overlay.classList.remove('modal-content--show');
                    } else {
                         errors.innerHTML = xhr.responseText;
                        //console.log(xhr.responseText);
                    }
                    //console.log(xhr.responseText);
                };
            }
