/*var goods = document.getElementsByClassName('baskin');
var bask = document.getElementById('goods');

for (var i = 0; i < goods.length; i++) {
    goods[i].addEventListener('click', baskAdd);
}

    function baskAdd() {
        bask.innerHTML  = 'в корзине 1 товар';
    }*/



    document.addEventListener("DOMContentLoaded", function() {


    var xhr = new XMLHttpRequest();



    var btn = document.getElementsByClassName('baskin');
    var basc = document.getElementById('goods');

        for (var i = 0; i < btn.length; i++) {
           btn[i].addEventListener('click', add);
        }


        function add(event) {
           event.preventDefault();
           var id = this.getAttribute('data-id');


        xhr.open( 'POST', '/cart/addAjax/' + id,  true) ;
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();
        xhr.onreadystatechange = function() {
            basc.textContent = xhr.responseText ;
            //console.log(xhr.responseText);
            };
        }


    });
