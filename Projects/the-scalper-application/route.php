<?php
    //requiring my models
    require_once "model/DBManager.class.php";
    require_once "model/Constants.class.php";
    require_once "model/Functions.class.php";
    require_once "model/User.class.php";
    require_once "model/Event.class.php";

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }

    if (isset($_GET['params']))
        if (strpos($_GET['params'], 'JSON') !== false) {
            $params = json_decode(Functions::base64url_decode(substr($_GET['params'], 4)), true);
        } else {
            $params = $_GET['params'];
        }

    require_once 'dispatcher.php';
?>