<?php


class SendController
{
    public function actionCallBack()
    {
        if (isset($_POST['name'])) {
            //Форма отправлена? - Да

            //Считываем данные формы
            $userName = $_POST['name'];
            $userPhone = $_POST['phone'];
            $userEmail = $_POST['email'];
            $userMessage = $_POST['message'];

            if (!isset($_POST['agree'])) { $_POST['agree'] = 0; }
            $userAgree = $_POST['agree'];

            //Валидация полей
            $errors = false;

            if (!Validation::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!Validation::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if (!Validation::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if (!Validation::checkAgree($userAgree)) {
                $errors[] = 'Нужно подтвердить согласие конфиденциальности';
            }

            //Форма заполнена корректно?
            if ($errors == false) {

                    //Оповещаем администратора о новом заказе
                    $adminEmail = 'autolife724@gmail.com';
                    $messege = 'Имя: '.$userName.' Телефон: '.$userPhone.' Email '.$userEmail;
                    $subject = 'Форма обратной связи';
                    mail($adminEmail, $subject, $messege);
                    echo '1';
                    return true;

            } else {
                foreach ($errors as $error) {
                    echo $error.'<br>';
                }
            }

            return  true;

        }
        //var_dump($_POST['name']);

     }
}

?>
