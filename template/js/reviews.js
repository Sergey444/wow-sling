//Показать ещё отзывы 

    var openReview = document.querySelector('.reviews__link--open');
        openReview.classList.remove('reviews--no-js');
        openReview.addEventListener('click', openReviews);

    var closeReview = document.querySelector('.reviews__link--close');
        closeReview.addEventListener('click', closeReviews);

    function openReviews(event) {
        event.preventDefault();
        var item = document.getElementsByClassName('reviews__items--hidden');
        if (item.length == 1) {
            this.style.opacity = '0';
            }
        closeReview.style.opacity = '1';
        for (var i = 0; i < item.length; i++) {
            item[i].classList.remove('reviews__items--hidden');
            break;
        }
    }

    function closeReviews(event) {
        //event.preventDefault();
        var item = document.getElementsByClassName('reviews__items--additionally');
            for (var i = 0; i < item.length; i++) {
                item[i].classList.add('reviews__items--hidden');
            }
        this.style.opacity = '0';
        openReview.style.opacity = '1';
    }
