<!--<div class="block-mock"></div>-->




    	<footer class="page-footer">
            <div class="page-footer__wrapper">
                <div class="page-footer__social">
                    <a href="https://vk.com/slingostudio" class="social-link  social-link--vk">Мы в контакте</a>
                    <a href="https://www.instagram.com/wow.sling/?hl=ru" class="social-link  social-link--inst">Мы в инстаграмм</a>
					<a class="visually-hidden" href="https://ru.icons8.com/icon/48597/ВКонтакте">Вконтакте иконка в оригинале</a>
					<a class="visually-hidden" href="https://ru.icons8.com/icon/47872/Instagram">Instagram иконка в оригинале</a>
                </div>

				<ul class="page-footer__info">
                    <li><a href="/content/contacts/">Контакты</a></li>

                    <li><a href="/content/proizvodstvo-slingov/" alt="Производство слингов">Производство</a></li>
                    <li><a href="/content/politics/">Конфиденциальность</a></li>


				</ul>

				<ul class="page-footer__info">
                    <li><a href="/content/kak-nosit-sling/" alt="Как правильно носить слинг">Обучение</a></li>
                    <li><a href="/content/oplata-i-dostavka/">Оплата и доставка</a></li>
                    <li><a href="/content/vozvrat-slingov/">Условия возврата</a></li>

                </ul>

				<p class="page-footer__copyrighted">WowSling © 2013-2017</p>
            </div>

        </footer>

<!-- Всплавающая форма - купить в один клик -->
        <div id="form" class="modal-content  modal-content--nojs">
            <div class="modal-content__wrapper">
				<button class="modal-content__close" type="button" title="Закрыть">Закрыть</button>
                <?php if(isset($result) && $result == true) : ?>
                    <p>Ваш заказ отправлен<p>
                <?php else : ?>
                <form action="" class="modal-content__form" method="POST" class="login-form" enctype="application/x-www-form-urlencoded">

                    <h3>Мы рады, что вы нашли всё необходимое в магазине Wow Sling! Заполните простую форму заказа и мы свяжемся с вами, чтобы уточнить детали.<span class="visually-hidden  modal-content__item"><span></h3>
                        <p id="error"></p>
                        <div class="form-data__choose-item">
                         <span class="form-data__error " id="for-name">Имя не правильное</span>
                            <label class="input" for="name">Имя:</label>
                            <input class="input__text" type="text" name="name" placeholder="Введите ваше имя">
                        </div>

                        <div class="form-data__choose-item">
                         <span class="form-data__error" id="for-phone">Телефон не правильный</span>
                            <label class="input" for="name">Телефон:</label>
                            <input class="input__text" type="tel" name="phone" placeholder="Ваш телефон">
                        </div>

                        <div class="form-data__choose-item">
                        <span class="form-data__error" id="for-email">email не правильный</span>
                            <label class="input" for="second_name">Email:</label>
                            <input class="input__text" type="text" name="email" placeholder="Ваш email">
                        </div>


                    <label class="input  input--check">
                        <input  type="checkbox" name="agree" value="1">
                        <span class="input__checkbox"></span>
                        Я ознакомился с <a class="form-data__policy" target="_blank" href="/content/politics/">политикой конфиденциальности</a>
                    </label>
                    <br><br>
					<button id="send" class="btn  modal-content__btn" name="submit" type="submit" title="Отправить">Отправить</button>
				</form>
            <?php endif; ?>
        </div>
		</div>



        <div id="trans-form" class="modal-content__transition  modal-content--nojs">
            <div class="modal-content__wrapper">
                <button class="modal-content__close" type="button" title="Закрыть">Закрыть</button>
                <p><b>Товар добавлен в корзину</b></p>
                <a class="btn" href="/cart/">Перейти в корзину</a>
                <a class="btn" href="/">Перейти на главную</a>
            </div>
        </div>



        <div class="modal-content__overlay"></div>
<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46781685 = new Ya.Metrika({
                        id:46781685,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>


    <noscript><div><img src="https://mc.yandex.ru/watch/46781685" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        <script src="/template/js/buy.js"></script>
        <script src="/template/js/valid-form.js"></script>
		<script src="/template/js/main-open.js"></script>
		<script src="/template/js/baskin.js"></script>

<!-- Jivo site -->
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = 'Bp0HPAdFHH';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->




    </body>
</html>
