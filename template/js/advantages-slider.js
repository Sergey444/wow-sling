var advantagesSlider = document.querySelector('.advantages');
advantagesSlider.classList.remove('slider--nojs');

var toggle = document.getElementsByClassName('slider__input');
for (var i = 0; i < toggle.length; i++) {
    toggle[i].addEventListener('click', func);
}

function func() {
    var slide = document.getElementsByClassName('advantages__item');

    for (var i = 0; i < slide.length; i++) {
        if (slide[i].classList.contains('slider__item')){
            slide[i].classList.remove('slider__item');
        }
    }
    slide[this.value].classList.add('slider__item');
}
