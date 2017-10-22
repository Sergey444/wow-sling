        <?php include ROOT.'/views/layouts/header.php'?>

<?php if ($result) : ?>
    <p>Спасибо за заказ! Мы обработаем его в ближайшее время и свяжемся с вами для подтверждения</p>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<section>
    <?php var_dump($result); ?> 
<form action="/contacts/checkout/" method="POST" class="form-data">
    <div class="form-data__wrapper">

				 <!-- <div class="form-data__block-wrapper">
                	<p class="form-data__content">Мы будем рады воплотить в жизнь ваши пожелпния! Заполните простую форму заказа, и мы свяжемся с вами, что бы уточнить детали.</p>

                </div> -->


                <div class="form-data__block">
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <!-- <span>Заполните поля</span> -->
	                    </div>
	                    <div class="form-data__choose">

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
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Город</label>
	                            <input class="input__text" type="text" name="city" placeholder="Ваш город">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Почтовый индекс</label>
	                            <input class="input__text" type="text" name="post_order" placeholder="Почтовый индекс">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Улица</label>
	                            <input class="input__text" type="text" name="street" placeholder="Ваша улица">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Дом</label>
	                            <input class="input__text" type="text" name="number_house" placeholder="Номер дома">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Квартира</label>
	                            <input class="input__text" type="text" name="number-flat" placeholder="Номер квартиры">
	                        </div>

                            <div class="form-data__choose-item">
                                <a class="visually-hidden" href="https://ru.icons8.com/icon/10942/Звездочка">Звездочка иконка в оригинале</a>
                                <a class="visually-hidden" href="https://ru.icons8.com/icon/49632/Перо-с-чернилами">Перо с чернилами иконка в оригинале</a>
                                <label class="input  form-data__ink" for="">Дополнительно</label>
    	                        <textarea class="input__text  input__text--textarea" name="info" placeholder="Опишите все ваши пожелания к заказу"></textarea>
    	                    </div>
	                    </div>

					</div>

                </div>

                <div class="form-data__submit">

					<div class="form-data__block-wrapper">
                        <label class="input  input--check">
                            <input  type="checkbox" name="agree" value="1">
                            <span class="input__checkbox"></span>
                            Я ознакомился с <a class="form-data__policy" href="#">политикой конфиденциальности</a>
                        </label>

	                    <button type="submit" class="form-data__button  btn">Отправить заказ</button>
						<!-- <span class="form-data__required-fields">Все поля являются обязательными</span> -->

					</div>
                </div>
            </div>
        </form>
    </section>
    
<?php 
        echo '<pre>';
        print_r($_POST);
        echo'</pre>';
    ?>
        <script src="/template/js/valid-form.js"></script>
<?php endif; ?>


<?php include ROOT.'/views/layouts/footer.php'?>
