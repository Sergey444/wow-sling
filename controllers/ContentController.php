<?php


class ContentController {
    
    public function actionIndex($param)
    {
        //var_dump($param);
        require_once(ROOT.'/views/content/'.$param.'.php');
        
        return true;
    }
    
}
