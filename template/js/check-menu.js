
//Подсветка меню
 document.addEventListener("DOMContentLoaded", function() {
     var elems = document.getElementsByClassName('main-nav__link');
     var href = window.location.href;
     for (var i = 0; i < elems.length; i++) {
         elemHref = elems[i].href;
         if (href.search(elemHref) == 0 ) {
             elems[i].parentElement.classList.add('main-nav__item--active');
         }
     }
 });
