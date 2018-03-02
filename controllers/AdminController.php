<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author home
 */
class AdminController extends AdminBase
{
    /**
     *
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        //Проверка доступа
        self::checkAdmin();

        //Подключаем вид
        require_once(ROOT.'/views/admin/index.php');
        return true;
    }

    public function actionLogout() {
        session_destroy();

        header("Location: / ");
    }
}
