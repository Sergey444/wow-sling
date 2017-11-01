var goods = document.getElementsByClassName('goods');
    for (var i = 0; i < goods.length; i++) {
        goods[i].classList.remove('goods--nojs');
    }


var next = document.getElementsByClassName('hits__next');
var prev = document.getElementsByClassName('hits__prev');
for (var i = 0; i < next.length; i++) {
    next[i].addEventListener('click', nextHits);
}
for (var i = 0; i < prev.length; i++) {
    prev[i].addEventListener('click', prevHits);
}

var state = 0;


function nextHits() {

        var goodsItems = this.parentElement.querySelector('.goods__items');
        var width = document.body.offsetWidth;

        if (state == undefined) {
            state = 25;
        } else if (width > 1182 ) {
            state = 0;

        } else if (width > 750  && state >= 50 ) {
            state = 0;

        } else if (width < 750  && state >= 75 ) {
            state = 0;

        } else {

            state += 25;

        }
        goodsItems.style.transform = 'translate(-' + state + '%)';
}

function prevHits() {

        var goodsItems = this.parentElement.querySelector('.hits__items');
        var width = document.body.offsetWidth;

        if (state == undefined || state == 0) {
            if (width > 1182) {
                state = 0;
            } else if (width > 750) {
                state = 50;
            } else {
                state = 75;
            }
        } else {
            state -= 25;
        }

    goodsItems.style.transform = 'translate(-' + state + '%)';
}
