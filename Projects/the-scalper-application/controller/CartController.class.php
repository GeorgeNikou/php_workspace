<?php


    class CartController {
        private $db;
        public $params;

        function __construct () {
            $this -> db = new DBManager();
        }

        function list () {
            require_once 'view/cart.php';
        }

        function add() {
            try {
                $_SESSION['cart'][] = $this->db->getEvent($this->getParams());
                $result = ['error' => false, 'msg' => 'Event added to cart'];
            } catch (Exception $exception) {
                $result = ['error' => true, 'msg' => $exception->getMessage()];
            }
            header('location: /cart/list/JSON' . Functions::base64url_encode(json_encode($result)));
        }

        function remove() {
            try {
                $remove_id = $this->getParams();
                foreach ($_SESSION['cart'] as $item) {
                    if ($item->getId() == $remove_id)
                        $event = $item;
                }
                unset($_SESSION['cart'][array_search($event, $_SESSION['cart'])]);
                $result = ['error' => false, 'msg' => 'Event removed from cart'];
            } catch (Exception $exception) {
                $result = ['error' => true, 'msg' => $exception->getMessage()];
            }
            header('location: /cart/list/JSON' . Functions::base64url_encode(json_encode($result)));
        }

        function checkout () {
            require_once 'view/buy.php';
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