<?php
    spl_autoload_register(function ($class_name) {
        $filename = $class_name . '.class.php';
        require_once 'model/' . $filename;
    });

    session_start();
    $db = new DBManager();

    if (isset($_GET['logout'])) {
        session_destroy();
        $params = array('error' => false, 'msg' => 'You have been logged out');
        header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode($params)));
    }

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        unset($_POST['action']);
        if (isset($_POST['do'])) unset($_POST['do']);
        switch ($action) {
            case 'register':
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $card_info = array_filter($_POST, function ($key) {
                    $pos = strpos($key, 'credit_');
                    if ($pos === 0)
                        unset($_POST[$key]);
                    return $pos === 0;
                }, ARRAY_FILTER_USE_KEY);
                $_POST['credit_info'] = $card_info;
                try {
                    $result = $db -> addUser(new User($_POST));
                    if ($result[0]) {
                        Functions ::sendMail($_POST['email'], "Validate your account", 'Please validate your account. <a href="' . Functions ::url() . '/auth/validate/' . $result[1] . '" target="_blank">Click here</a>');
                        $params = array('error' => false, 'msg' => 'Registered successfully! Please validate your account using the link you received in your email');
                    } else {
                        $params = array('error' => true, 'msg' => 'Error while registering!');
                    }
                } catch (Exception $exception) {
                    $params = array('error' => true, 'msg' => $exception -> getMessage());
                } finally {
                    header('location: /auth/register/JSON' . Functions ::base64url_encode(json_encode($params)));
                }
                break;
            case 'login':
                try {
                    $user = new User(['username' => $_POST['username']]);
                    $user = $db -> getSingleUser($user);
                } catch (Exception $exception) {
                    $params = array('error' => true, 'msg' => $exception -> getMessage());
                    header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode($params)));
                }
                if ($user) {
                    if ($user -> getValid() == 1) {
                        var_dump($_POST['password'], $user);
                        if (password_verify($_POST['password'], $user -> getPassword())) {
                            $_SESSION['user'] = $user;
                            header('location: /');
                        } else {
                            $params = array('error' => true, 'msg' => 'Invalid password! Please try again');
                            header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode($params)));
                        }
                    } else {
                        $params = array('error' => true, 'msg' => 'Please validate your account before continuing!');
                        header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode($params)));
                    }
                } else {
                    $params = array('error' => true, 'msg' => 'Invalid username! Please try again');
                    header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode($params)));
                }
                break;
            case 'event_add':
                $event = new Event($_POST);
                $event -> setImage(file_get_contents($_FILES['image']['tmp_name']));
                $result = $db -> addEvent($event);
                $params = array('error' => !$result, 'msg' => 'Event ' . ($result ? 'added' : 'add failed'));
                header('location: /management/add/JSON' . Functions ::base64url_encode(json_encode($params)));
                break;
            case 'event_edit':
                $event = new Event($_POST);
                if (!empty($_FILES)) $event -> setImage(file_get_contents($_FILES['image']['tmp_name']));
                $result = $db -> editEvent($event);
                $params = array('error' => !$result, 'msg' => 'Event ' . ($result ? 'edited' : 'edit failed'));
                header('location: /management/edit/JSON' . Functions ::base64url_encode(json_encode($params)));
                break;
        }
    }