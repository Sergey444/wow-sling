<?php


class ContentController {

    public function actionIndex($param)
    {
        //var_dump($param);
        if(file_exists(ROOT.'/views/content/'.$param.'.php')) {
            require_once(ROOT.'/views/content/'.$param.'.php');
            return true;
        }
    }
}
