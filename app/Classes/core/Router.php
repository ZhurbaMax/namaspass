<?php

namespace app\Classes\core;

use app\Classes\controllers\MainController;

class Router
{

    public function loginUser()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
        $routing = [
            "/"     => ['controller' => "Main", 'action' => 'index'],
            "/auth" => ['controller' => "Main", 'action' => 'auth'],
        ];
        if (isset($routing[$route])){
            $connroller = 'app\\Classes\\controllers\\' . $routing[$route]['controller'] . 'Controller';
            //$connroller = $routing[$route]['controller'] . 'Controller';
            $connroller_obj = new $connroller();
            //$connroller_obj->$routing[$route]['action']();
            $connroller_obj->{$routing[$route]['action']}();

        }else{
            return 'нет пути';
        }

        //$cont = new MainController();
        //$cont->auth();
        //$cont->index();

    }
}