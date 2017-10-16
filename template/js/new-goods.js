var goods = document.querySelector('.goods');
    goods.classList.remove('goods--nojs');

var next = document.querySelector('.goods__next');
var prev = document.querySelector('.goods__prev');
    next.addEventListener('click', nextGoods);
    prev.addEventListener('click', prevGoods);





    function nextGoods() {
        var goodsItems = document.querySelector('.goods__items');
        //var elem = goodsItems.style.transform;
        var goodsWrapper = document.querySelector('.goods__wrapper');
        var width = document.body.offsetWidth;
        //console.log(width);

        if (window.degree == undefined) {
            window.degree = 12.5;
        } else if (width > 1182 && window.degree >= 50 ) {
            window.degree = 0;

        } else if (width > 750  && window.degree >= 75 ) {
            window.degree = 0;

        } else if (width < 750  && window.degree >= 87.5 ) {
            window.degree = 0;

        } else {
            window.degree += 12.5;
        }

        goodsItems.style.transform = 'translate(-' + degree + '%)';
        //console.log(elem);
    }

    function prevGoods() {
        var goodsItems = document.querySelector('.goods__items');
        var elem = goodsItems.style.transform;
        var width = document.body.offsetWidth;

        if (window.degree == undefined || window.degree == 0) {
            if (width > 1182) {
                window.degree = 50;
            } else if (width > 750) {
                window.degree = 75;
            } else {
                window.degree = 87.5;
            }
        } else {
            window.degree -= 12.5;
        }

        goodsItems.style.transform = 'translate(-' + degree + '%)';

        console.log(degree);
    }
