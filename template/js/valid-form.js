// var inputs = document.getElementsByClassName('input__text');
   var inputs = document.getElementsByTagName('input');    


    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('blur', checkVal);
    }



    function checkVal() {
        var parent = this.parentElement;
        var span = parent.firstElementChild;
            val = this.value.trim();

        //console.log(val);

        switch (this.name) {
                case 'name':
                    if (val === '' || val.length < 2) {
                        this.classList.remove('input__text--ok');
                        this.classList.add('input__text--error');
                        parent.firstElementChild.classList.add('form-data__error--show');
                    } else {
                        this.classList.remove('input__text--error');
                        this.classList.add('input__text--ok');
                        parent.firstElementChild.classList.remove('form-data__error--show');
                    }
                    break;

                case 'phone':
                    var result = /^[+0-9-]{6,18}$/.test(val);
                    if (val === '' || result === false) {
                        this.classList.remove('input__text--ok');
                        this.classList.add('input__text--error');
                        parent.firstElementChild.classList.add('form-data__error--show');
                    } else {
                        this.classList.remove('input__text--error');
                        this.classList.add('input__text--ok');
                        parent.firstElementChild.classList.remove('form-data__error--show');
                    }
                    break;

                case 'email': {

                    var result = /^[0-9a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$/.test(val);
                    if (result === false) {
                        this.classList.remove('input__text--ok');
                        this.classList.add('input__text--error');
                        parent.firstElementChild.classList.add('form-data__error--show');
                    } else {
                        this.classList.remove('input__text--error');
                        this.classList.add('input__text--ok');
                        parent.firstElementChild.classList.remove('form-data__error--show');
                    }
                    break;
                }

                case 'city': {
                    if (val != '' && val.length > 2) {
                        this.classList.add('input__text--ok');
                    }
                }
        }
    }
