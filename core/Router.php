<?php

class Router
{

    public static function route($url)
    {
        // Controller
        $controller = (isset($url[0]) && $url != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = $controller;
        array_shift($url);

        // Action
        $action = (isset($url[0]) && $url != '') ? $url[0] . 'Action' : 'indexAction';
        $action_name = $action;
        array_shift($url);

        //params
        $queryParams = $url;

        $dispacth  = new $controller($controller_name, $action);

        if (method_exists($controller, $action)) {
            call_user_func_array([$dispacth, $action], $queryParams);
        } else {
            die('That method doesn\'t exist in the controller ' . $controller_name);
        }
    }

    public static function redirect($location)
    {
        if (!headers_sent()) {
            header('Location: ' . SROOT . $location);
        } else {
            echo '<script type="text/javascript">';
            echo 'windows.location.href="' . SROOT . $location . '"';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url=' . SROOT . '" />';
            echo '</noscript>';
            exit;
        }
    }
}
