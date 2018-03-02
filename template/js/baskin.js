//    document.addEventListener("DOMContentLoaded", function() {

    var xhr = new XMLHttpRequest();

    var btn = document.getElementsByClassName('baskin');
    var basc = document.getElementById('goods');




        for (var i = 0; i < btn.length; i++) {
           btn[i].addEventListener('click', add);
        }


        function add(event) {
           event.preventDefault();
           var id = this.getAttribute('data-id');
           var span = document.getElementById(id);

        xhr.open( 'POST', '/cart/addAjax/' + id,  true) ;
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();

        xhr.onreadystatechange = function() {
            basc.textContent = xhr.responseText;

            formTrans.classList.add('modal-content--show');    //Переменная определена в buy.js
            overlay.classList.add('modal-content--show');

            //console.log(xhr.responseText);
            };
        }



    //});
