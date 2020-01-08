<?php


    class EventsController {
        private $db;
        public $params;

        function __construct () {
            $this -> db = new DBManager();
        }

        function list () {
            require_once 'view/events.php';
        }

        function category () {
            $action = 'category';
            require_once 'view/events.php';
        }

        function detail () {
            require_once 'view/details.php';
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