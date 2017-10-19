        <?php include ROOT.'/views/layouts/header.php'?>

<?php if ($result) : ?>
    <p>Сообщение успешно отправлено! Мы ответим Вам на указанный email.</p>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<form action="" method="POST" class="form-data">

				<div class="form-data__block-wrapper">
                	<p class="form-data__content">Мы будем рады воплотить в жизнь ваши пожелпния! Заполните простую форму заказа, и мы свяжемся с вами, что бы уточнить детали.</p>
				</div>

                <div class="form-data__block">
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <span>ТИП</span>
	                    </div>
	                    <div class="form-data__choose">
	                        <label class="input  input--check">
	                            <input type="radio" name="accessory" checked>Аксессуар для интерьера<span class="input__radio"></span></label>

	                        <label class="input  input--check">
	                            <input type="radio" name="accessory">Детская игрушка<span class="input__radio"></span></label>
	                    </div>
					</div>
                </div>

                <div class="form-data__block">
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <span>Цвет</span>
	                    </div>
	                    <div class="form-data__choose ">
							<div class="form-data__choose-color">
		                        <label class="input  input--check" ><input  type="checkbox" name="white" checked><span class="input__checkbox"></span>Белый</label>
		                        <label class="input  input--check" ><input  type="checkbox" name="grey" checked><span class="input__checkbox"></span>Серый</label>
		                        <label class="input  input--check" ><input  type="checkbox" name="tiffany" ><span class="input__checkbox"></span>«Тиффани»</label>

		                        <label class="input  input--check" ><input  type="checkbox" name="black" ><span class="input__checkbox"></span>Черный</label>
		                        <label class="input  input--check" ><input  type="checkbox" name="pink" ><span class="input__checkbox"></span>Розовый</label>
		                        <label class="input  input--check" ><input  type="checkbox" name="orange" ><span class="input__checkbox"></span>Оранжевый</label>
	                    	</div>
	                    </div>
					</div>
                </div>

                <div class="form-data__block">
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <span>ФИО</span>
	                    </div>
	                    <div class="form-data__choose">
	                        <div class="form-data__choose-item">
	                            <label class="input" for="surname">Фамилия:</label>
	                            <input class="input__text" type="text" name="surname" placeholder="Укажите фамилию">
	                        </div>
	                        <div class="form-data__choose-item">
	                            <label class="input" for="name">Имя:</label>
	                            <input class="input__text  input__text--error" type="text" name="name" placeholder="Введите ваше имя">
	                        </div>
	                        <div class="form-data__choose-item">
	                            <label class="input" for="second_name">Отчество:</label>
	                            <input class="input__text" type="text" name="second_name" placeholder="Отчество, если желаете">
	                        </div>
	                    </div>
					</div>
                </div>

                <div class="form-data__block  form-data__block--relations">
					<!--<div class="help">-->
					<div class="form-data__block-wrapper">
						<div class="form-data__title">
	                        <span>ТЕЛ</span>
	                    </div>
	                    <div class="form-data__choose">
	                        <input class="input__text  input__text--phone" type="text" name="phone" placeholder="+7 XXX XXX XX XX">
	                    </div>
					</div>
					<!--<div class="help">-->
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <span>E-MAIL</span>
	                    </div>
	                    <div class="form-data__choose">
	                        <input class="input__text  input__text--email" type="text" name="email" placeholder="Ваш e-mail">
	                    </div>
					</div>
                </div>

                <div class="form-data__block">
					<div class="form-data__block-wrapper form-data__block-wrapper--textarea ">
	                    <div class="form-data__title">
	                        <span>ДОП</span>
	                    </div>
	                    <div class="form-data__choose">
	                        <textarea class="input__text  input__text--textarea" name="info" placeholder="Опишите все ваши пожелания к заказу"></textarea>
	                    </div>
					</div>
                </div>

                <div class="form-data__submit">
					<div class="form-data__block-wrapper">

	                    <button type="submit" class="form-data__button  btn">Отправить заказ</button>
						<span class="form-data__required-fields">Все поля являются обязательными</span>

					</div>
                </div>
        </form>

<?php endif; ?>


<?php include ROOT.'/views/layouts/footer.php'?>
