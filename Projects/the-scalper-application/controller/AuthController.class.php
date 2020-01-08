<?php

    class AuthController {
        private $db;
        public $params;

        function __construct () {
            $this -> db = new DBManager();
        }

        function login () {
            require_once 'view/auth/login.php';
        }

        function register () {
            require_once 'view/auth/register.php';
        }

        function validate () {
            if (isset($this->params)) {
                $validated = $this -> db -> validateUser($this->params);
                header('Location: /auth/login/JSON' . Functions::base64url_encode(json_encode(['error' => !$validated, 'msg' => ($validated ? 'Account has been validated. Please login to continue' : 'An error occured during validation. Please try again')])));
            }
        }

        function error () {
            require_once 'view/404.php';
        }

        /**
         * @return mixed
         */
        public function getParams () {
            return $this -> params;
        }

        /**
         * @param mixed $params
         */
        public function setParams ($params): void {
            $this -> params = $params;
        }


    }