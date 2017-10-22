document.addEventListener("DOMContentLoaded", go);

function go() {
    window.timerId = window.setInterval(slider, 5000);
}

function slider() {
    var elem = document.getElementById('slider');

    if ( window.s == undefined || window.s === 4) {
        s = 1;
    } else {
        s = 1 + s;
    }
    elem.style.backgroundImage = "url(/template/img/slide" + s + ".jpg)";
}
