<?php
    $controllers = array(
        'frontend'   => array('home', 'contact', 'error'),
        'events'     => array('list', 'category', 'detail', 'error'),
        'auth'       => array('login', 'register', 'validate', 'error'),
        'management' => array('dashboard', 'add', 'edit', 'delete', 'error'),
        'cart'       => array('list', 'add', 'remove', 'checkout', 'error')
    );

    /*validate if controller and or if action in said controller also exist*/
    if (array_key_exists($controller, $controllers)) //checks to see if the controller exists
        if (in_array($action, $controllers[$controller])) //checks to see if the action exists in the controller
            dispatch($controller, $action, $params);
        else
            dispatch($controller, $controllers[$controller][0]);
    else
        dispatch('frontend', 'error');

    /**
     * @param      $controller
     * @param      $action
     * @param null $params
     */
    function dispatch ($controller, $action, $params = null) {
        //set view
        require_once "view/header.php";
        require_once "controller/" . ucfirst($controller) . "Controller.class.php";

        $type = ucfirst($controller) . "Controller";
        $control = new $type();
        $control -> setParams($params);
//        $control->params['action'] = $action;

        $control ->{$action}();
        require_once "view/footer.php";
    }

?>