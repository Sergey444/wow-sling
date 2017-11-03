        <?php include ROOT.'/views/layouts/header.php';?>
<section>

<form action="" method="POST" class="form-data">
    <div class="form-data__wrapper">
<?php if ($result) : ?>
        <div class="form-data__block">
            <p>Спасибо за заказ! Мы обработаем его в ближайшее время и свяжемся с вами для подтверждения</p>
            
            <a class="btn" href="/">Вернуться на главную</a>
            
            
         </div>
<?php else: ?>




                <div class="form-data__block-head">
                     Вы выбрали:<br>
                    <table class="form-data__table">
                          
                     <?php  foreach ($products as $product) :?>
                          
                         <tr>
                            <td><img  src="<?php echo Product::getImage($product['id']); ?>" width="70" height="130"></td>
                            <td><p><?php echo $product['name'];?></p></td>
                            <td><p> <?php echo $_SESSION['products'][$product['id']].' шт<br>';?></p></td>
                         </tr>
                    
                        
                         
                     <?php endforeach; ?>
                    </table>   
                     <p>на сумму: <?php echo $totalPrice; ?> рублей.</p><br>

                     <?php if (isset($errors) && is_array($errors)) : ?>
                         <ul>
                             <?php foreach ($errors as $error): ?>
                                 <li> - <?php echo $error; ?></li>
                             <?php endforeach; ?>
                         </ul>
                     <?php endif; ?>

                	<p class="form-data__content">Мы будем рады воплотить в жизнь ваши пожелания!
                         Заполните простую форму заказа, и мы свяжемся с вами, что бы уточнить детали.</p>

                </div>


                <div class="form-data__block">
					<div class="form-data__block-wrapper">
	                    <div class="form-data__title">
	                        <!-- <span>Заполните поля</span> -->
	                    </div>
	                    <div class="form-data__choose">



                            <div class="form-data__choose-item">
                             <span class="form-data__error " id="for-name">Имя не правильное</span>
	                            <label class="input" for="name">Имя:</label>
	                            <input class="input__text" type="text" name="name" placeholder="Введите ваше имя" value="<?php echo $userName ?>">
	                        </div>

	                        <div class="form-data__choose-item">
                             <span class="form-data__error" id="for-phone">Телефон не правильный</span>
	                            <label class="input" for="name">Телефон:</label>
	                            <input class="input__text" type="tel" name="phone" placeholder="Ваш телефон" value="<?php echo $userPhone ?>">
	                        </div>

	                        <div class="form-data__choose-item">
                            <span class="form-data__error" id="for-email">email не правильный</span>
	                            <label class="input" for="second_name">Email:</label>
	                            <input class="input__text" type="text" name="email" placeholder="Ваш email" value="<?php echo $userEmail ?>">
	                        </div>

                            <?php if ($delivery == 1) :?>

                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Город</label>
	                            <input class="input__text" type="text" name="city" placeholder="Ваш город" value="<?php echo $userCity ?>">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Почтовый индекс</label>
	                            <input class="input__text" type="text" name="post_order" placeholder="Почтовый индекс" value="<?php echo $userPostOrder ?>">
	                        </div>

                            <?php endif; ?>

                            <?php if ($delivery < 3) :?>

                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Улица</label>
	                            <input class="input__text" type="text" name="street" placeholder="Ваша улица" value="<?php echo $userStreet ?>">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Дом</label>
	                            <input class="input__text" type="text" name="number_house" placeholder="Номер дома" value="<?php echo $userHouse ?>">
	                        </div>
                            <div class="form-data__choose-item">
	                            <label class="input" for="city">Квартира</label>
	                            <input class="input__text" type="text" name="number_flat" placeholder="Номер квартиры" value="<?php echo $userFlat ?>">
	                        </div>

                        <?php endif; ?>

                            <br>
                            <div class="form-data__choose-item">
                                <a class="visually-hidden" href="https://ru.icons8.com/icon/10942/Звездочка">Звездочка иконка в оригинале</a>
                                <a class="visually-hidden" href="https://ru.icons8.com/icon/49632/Перо-с-чернилами">Перо с чернилами иконка в оригинале</a>
                                <label class="input  form-data__ink">Дополнительно</label>
    	                        <textarea class="input__text  input__text--textarea" name="info" placeholder="Опишите все ваши пожелания к заказу" ><?php echo $userInfo ?></textarea>
    	                    </div>
	                    </div>

					</div>

                </div>
                <input class="visually-hidden" name="delivery" value="<?php echo $delivery ?>">
                <div class="form-data__submit">

					<div class="form-data__block-wrapper">
                        <label class="input  input--check">
                            <input  type="checkbox" name="agree" value="1"  <?php if ($userAgree == 1) { echo 'checked'; } ?>>
                            <span class="input__checkbox"></span>
                            Я ознакомился с <a class="form-data__policy" href="#">политикой конфиденциальности</a>
                        </label>

	                    <button type="submit" name="submit" class="form-data__button  btn">Отправить заказ</button>
						<!-- <span class="form-data__required-fields">Все поля являются обязательными</span> -->

					</div>
                </div>



<?php endif; ?>

            </div>
        </form>
    </section>
    <script src="/template/js/valid-form.js"></script>

<?php include ROOT.'/views/layouts/footer.php';?>
