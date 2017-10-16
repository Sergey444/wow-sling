var goods = document.getElementsByClassName('baskin');
var bask = document.getElementById('goods');

for (var i = 0; i < goods.length; i++) {
    goods[i].addEventListener('click', baskAdd);
}

    function baskAdd() {
        bask.innerHTML  = 'в корзине 1 товар';
    }
