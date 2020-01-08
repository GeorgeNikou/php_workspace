<?php

    class FrontendController {
        private $db;
        public $params;

        function __construct () {
            $this -> db = new DBManager();
        }

        function home () {
            require_once 'view/index.php';
        }

        function contact () {
            require_once 'view/contact.php';
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

