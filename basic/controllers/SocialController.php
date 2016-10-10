<?php

namespace app\controllers;

use yii\web\Controller;

class SocialController extends Controller
{
    
   
    //197d7cdb3474019dc6c9d32bb92a5e4be107021f68dd63080e29f41e147eed603432914584b370b7a461f
    public function actionIndex()
    {
        $params = [
            "client_id" => 5426176,
            "display" => "page",
            "redirect_uri"=>"https://oauth.vk.com/blank.html",
            "scope"=>"messages,offline",
            "response_type"=>"token",
            "v"=>"5.57",
            "state"=>"123456"
        ];
        $url = "https://oauth.vk.com/authorize?".http_build_query($params);
        return $this->render('index',['url' => $url]);
    }
}
