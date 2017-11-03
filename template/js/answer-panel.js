var buttons = document.getElementsByClassName('answers__btn');
var answersBlock = document.querySelector('.answers__blocks');
    answersBlock.classList.remove('answers__block--nojs');


for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', openPanel);
}


function openPanel(event) {
    event.preventDefault();

    var activeBtn = answersBlock.querySelector('.answers__btn--active'); //Получаем ссылку активной вкладки
    var link = activeBtn.getAttribute('href').substr(1);
    var panel = document.getElementById(link);  //Текущая активная панель

    var id = this.getAttribute('href').substr(1);
    var link =  document.getElementById(id);

    if (id && !link.classList.contains('answers__content--active')) {  //Проверяем не содержит ли панель класс актив
            panel.classList.remove('answers__content--active');
            activeBtn.classList.remove('answers__btn--active');

            this.classList.add('answers__btn--active');
            link.classList.add('answers__content--active');
            //console.log(activeBtn);
    }



}
