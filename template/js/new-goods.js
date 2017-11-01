
var goods = document.getElementsByClassName('goods');
    for (var i = 0; i < goods.length; i++) {
        goods[i].classList.remove('goods--nojs');
    }

var next = document.getElementsByClassName('goods__next');
var prev = document.getElementsByClassName('goods__prev');
    for (var i = 0; i < next.length; i++) {
        next[i].addEventListener('click', nextGoods);
    }
    for (var i = 0; i < prev.length; i++) {
        prev[i].addEventListener('click', prevGoods);
    }

    var degree = 0;

    function nextGoods() {

            var goodsItems = this.parentElement.querySelector('.goods__items');
            var width = document.body.offsetWidth;

            if (degree == undefined) {
                degree = 12.5;
            } else if (width > 1182 && degree >= 50 ) {
                degree = 0;

            } else if (width > 750  && degree >= 75 ) {
                degree = 0;

            } else if (width < 750  && degree >= 87.5 ) {
                degree = 0;

            } else {

                degree += 12.5;

            }
            goodsItems.style.transform = 'translate(-' + degree + '%)';
    }

    function prevGoods() {

            var goodsItems = this.parentElement.querySelector('.goods__items');
            //var elem = goodsItems.style.transform;
            var width = document.body.offsetWidth;



            if (degree == undefined || degree == 0) {
                if (width > 1182) {
                    degree = 50;
                } else if (width > 750) {
                    degree = 75;
                } else {
                    degree = 87.5;
                }
            } else {
                degree -= 12.5;
            }

        goodsItems.style.transform = 'translate(-' + degree + '%)';
    }
