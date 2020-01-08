<?php


    class ManagementController {
        private $db;
        public $params;
        private $user;

        function __construct () {
            $this -> db = new DBManager();
            if (isset($_SESSION['user'])) $this -> user = $_SESSION['user']; else header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode(array('error' => true, 'msg' => 'You need to be logged in as an admin to access this section'))));
        }

        function dashboard () {
            if ($this -> user -> getRole() == Constants::ADMIN) {
                require_once 'view/management/dashboard.php';
            } else {
                header('location: /auth/login/JSON' . Functions ::base64url_encode(json_encode(array('error' => true, 'msg' => 'You need admin privileges to access this section'))));
            }
        }

        function edit () {
            $action = 'edit';
            require_once 'view/management/form.php';
        }

        function add () {
            $action = 'add';
            require_once 'view/management/form.php';
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