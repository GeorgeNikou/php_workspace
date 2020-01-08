<?php

    class DBManager {
        private $db;
        private $db_name;

        public function __construct () {
            $host_name = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ?
                $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER["HTTP_HOST"];

            if ($host_name == 'dev.scalper.ga') {
                $host = "10.147.20.13"; // server internal address. DO NOT CHANGE
                $user = "scalper";
                $pass = "Scalper123@";
                $dbname = "school_mod5_scalper";
            } else {
                $host = "localhost"; // local internal address. DO NOT CHANGE
                $user = "root";
                $pass = "";
                $dbname = "the_scalper_application";
            }

            //Tris to connect to the database using the provided credentials
            //if the connection works it will keep the persistance, else it will throw and error
            try {
                $this -> db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                $this -> db_name = $dbname;
                /*TO SEE MYSQL ERRORS*/
                $this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this -> db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (Exception $e) {
                die("Database Connection Error: " . $e -> getMessage());
            }
        }

        /**
         * getAllUsers : Function to get all the user in the database and return an object
         *
         * @return array
         */
        public function getAllUsers () {
            $query = $this -> db -> query("SELECT * FROM {$this->db_name}.users ORDER BY id"); //whenever you want to select everything from your table
            $usersArray = $query -> fetchAll(PDO::FETCH_ASSOC);
            $usersObj = [];

            foreach ($usersArray as $array)
                $usersObj[] = new User($array);

            return $usersObj;
        }

        /**
         * getAllUsers : Function to get a single user in the database and return an object
         *
         * @param User $user
         *
         * @return User | bool
         */
        public function getSingleUser ($user) {
            $query = $this -> db -> prepare("SELECT * FROM {$this->db_name}.users WHERE username = :username");
            $query -> execute(array($user->getUsername()));
            $result = $query -> fetch(PDO::FETCH_ASSOC);

            if ($result)
                return new User($result);
            else
                return false;
        }

        /**
         * addUser: function to add a user in the database
         *
         * @param User $user
         *
         * @return array|bool
         */
        public function addUser ($user) {
            $array = $user -> toArray();
            unset($array['id']); //removing the id from the array since it has a default value upon addin it
            $array['token'] = uniqid();

            $query = $this -> db -> prepare("INSERT INTO {$this->db_name}.users VALUES (DEFAULT, :username, :password, :firstname, :lastname, :address, :city, :province, :postal, :telephone, :email, :credit_info, :status, :valid, :token, :role)");
            $result = $query -> execute($array);
            return ($result ? array(true, $array['token']) : false);
        }

        /**
         * deleteUser: function to delete a user from the database
         *
         * @param User $user [the user to delete]
         *
         * @return bool [true or false if the user was deleted or not]
         */
        public function deleteUser ($user) {
            $query = $this -> db -> prepare("DELETE FROM {$this->db_name}.users WHERE id = :id");
            return $query -> execute(array("id" => $user -> getId()));
        }

        /**
         * [editUser function to edit a user in the database]
         *
         * @param User $user
         *
         * @return boolean
         */
        public function editUser ($user) {
            $query = $this -> db -> query("UPDATE {$this->db_name}.users SET username = :username, password = :password, firstname = :firstname, lastname = :lastname, address = :address, city = :city, province = :province, postal = :postal, telephone = :telephone, email = :email, credit_info = :credit_info, status = :status, valid = :valid, token = :token, role = :role WHERE id = :id");
            return $query -> execute($user -> toArray());
        }

        /**
         *
         * validateUser: set the user to valid if token from email exists
         *
         * @param string $token
         *
         * @return bool
         */
        public function validateUser ($token) {
            $query = $this -> db -> prepare("UPDATE {$this->db_name}.users SET `valid` = 1, `token` = '' WHERE `token` = :token AND `token` IS NOT NULL");
            $result = $query -> execute(array('token' => $token));
            return $result;
        }

        public function getEvents($category = null, $limit = null) {
            if ($category)
                $query = $this -> db -> query("SELECT * FROM {$this->db_name}.events WHERE type = '{$category}' ORDER BY id " . ($limit > 0 ? ' LIMIT ' . $limit : '') . ""); //whenever you want to select everything from your table
            else
                $query = $this -> db -> query("SELECT * FROM {$this->db_name}.events ORDER BY id"); //whenever you want to select everything from your table
            $eventsArray = $query -> fetchAll(PDO::FETCH_ASSOC);
            $events = [];

            foreach ($eventsArray as $array)
                $events[] = new Event($array);

            return $events;
        }

        /**
         * @param int $id
         *
         * @return array|bool
         */
        public function getEvent($id) {
            $query = $this -> db -> query("SELECT * FROM {$this->db_name}.events WHERE id = '{$id}'"); //whenever you want to select everything from your table
            $result = $query -> fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $event_result = new Event($result);
            } else {
                $event_result = false;
            }

            return $event_result;
        }

        public function addEvent ($event) {
            $array = $event -> toArray();
            unset($array['id']); //removing the id from the array since it has a default value upon adding it

            $query = $this -> db -> prepare("INSERT INTO {$this->db_name}.events VALUES (DEFAULT, :name, :type, :image, :date, :location, :duration, :num_tickets)");
            $result = $query -> execute($array);
            return $result;
        }

        public function editEvent ($event) {
            $array = $event -> toArray();
            $query = $this -> db -> prepare("UPDATE {$this->db_name}.events SET `name` = :name, `type` = :type, `image` = :image, `date` = :date, `location` = :location, `duration` = :duration, `num_tickets` = :num_tickets)");
            $result = $query -> execute($array);
            return $result;
        }
    }


?>