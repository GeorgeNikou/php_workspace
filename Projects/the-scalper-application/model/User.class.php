<?php

    /**
     * @description : This class stores personal information of a user
     * @author      : <[<george.nikou05@gmail.com>]>
     * @version     [<1.0>]
     * @created     : 6/013/2019
     * @lastmodified: 6/13/2019
     * @copyright   [George Nikou]
     */
    class User {
        // Attributes
        private $id;
        private $username;
        private $password;
        private $firstname;
        private $lastname;
        private $address;
        private $city;
        private $province;
        private $postal;
        private $telephone;
        private $email;
        private $credit_info;
        private $status = 1;
        private $valid = 0;
        private $token;
        private $role = Constants::USER;

        /**
         * Create a new user upon construction
         *
         * @param [integer] $id
         * @param [string] $username
         * @param [string] $password
         * @param [string] $firstname
         * @param [string] $lastname
         * @param [string] $address
         * @param [string] $city
         * @param [string] $province
         * @param [string] $postal
         * @param [integer] $telephone
         * @param [string] $email
         * @param [array] $credit_info
         * @param [integer] $status
         * @param [integer] $valid
         * @param [string] $token
         * @param [integer] $role
         */
        public function __construct ($array) {
            foreach ($array as $key => $value) {
                if ($key == 'credit_info' && is_string($value))
                    $this ->{$key} = json_decode($value, true);
                else
                    $this ->{$key} = $value;
            }
        }

        // Displays all attributes accordingly
        public function __toString () {
//		$stmt = "id: " 	  		  . $this->id . "<br>";
//		$stmt .= "Username: " 	  . $this->username . "<br>";
//		$stmt .= "Password: " 	  . $this->password . "<br>";
//		$stmt .= "firstname: " 	  . $this->firstname . "<br>";
//		$stmt .= "lastname: " 	  . $this->lastname . "<br>";
//		$stmt .= "address: " 	  . $this->address . "<br>";
//		$stmt .= "city: " 		  . $this->city . "<br>";
//		$stmt .= "province: " 	  . $this->province . "<br>";
//		$stmt .= "postal: " 	  . $this->postal . "<br>";
//		$stmt .= "telephone: " 	  . $this->telephone . "<br>";
//		$stmt .= "email: " 	 	  . $this->email . "<br>";
//		$stmt .= "credit_info: " 	  . $this->credit_info . "<br>";
//		$stmt .= "status: " 	  . $this->status . "<br>";
//		$stmt .= "valid: " 		  . $this->valid . "<br>";
//		return $stmt;
            return json_encode($this);
        }

        // Will be used to convert Client objects into array
        public function toArray () {
            $array = [];
            $array['id'] = $this -> id;
            $array['username'] = $this -> username;
            $array['password'] = $this -> password;
            $array['firstname'] = $this -> firstname;
            $array['lastname'] = $this -> lastname;
            $array['address'] = $this -> address;
            $array['city'] = $this -> city;
            $array['province'] = $this -> province;
            $array['postal'] = $this -> postal;
            $array['telephone'] = $this -> telephone;
            $array['email'] = $this -> email;
            $array['credit_info'] = json_encode($this -> credit_info);
            $array['status'] = $this -> status;
            $array['valid'] = $this -> valid;
            $array['token'] = $this -> token;
            $array['role'] = $this -> role;
            return $array;
        }

        /**
         * @return mixed
         */
        public function getId () {
            return $this -> id;
        }

        /**
         * @param mixed $id
         */
        public function setId ($id) {
            $this -> id = $id;
        }

        /**
         * @return mixed
         */
        public function getUsername () {
            return $this -> username;
        }

        /**
         * @param mixed $username
         */
        public function setUsername ($username) {
            $this -> username = $username;
        }

        /**
         * @return mixed
         */
        public function getPassword () {
            return $this -> password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword ($password) {
            $this -> password = $password;
        }

        /**
         * @return mixed
         */
        public function getFirstname () {
            return $this -> firstname;
        }

        /**
         * @param mixed $firstname
         */
        public function setFirstname ($firstname) {
            $this -> firstname = $firstname;
        }

        /**
         * @return mixed
         */
        public function getLastname () {
            return $this -> lastname;
        }

        /**
         * @param mixed $lastname
         */
        public function setLastname ($lastname) {
            $this -> lastname = $lastname;
        }

        /**
         * @return mixed
         */
        public function getAddress () {
            return $this -> address;
        }

        /**
         * @param mixed $address
         */
        public function setAddress ($address) {
            $this -> address = $address;
        }

        /**
         * @return mixed
         */
        public function getCity () {
            return $this -> city;
        }

        /**
         * @param mixed $city
         */
        public function setCity ($city) {
            $this -> city = $city;
        }

        /**
         * @return mixed
         */
        public function getProvince () {
            return $this -> province;
        }

        /**
         * @param mixed $province
         */
        public function setProvince ($province) {
            $this -> province = $province;
        }

        /**
         * @return mixed
         */
        public function getPostal () {
            return $this -> postal;
        }

        /**
         * @param mixed $postal
         */
        public function setPostal ($postal) {
            $this -> postal = $postal;
        }

        /**
         * @return mixed
         */
        public function getTelephone () {
            return $this -> telephone;
        }

        /**
         * @param mixed $telephone
         */
        public function setTelephone ($telephone) {
            $this -> telephone = $telephone;
        }

        /**
         * @return mixed
         */
        public function getEmail () {
            return $this -> email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail ($email) {
            $this -> email = $email;
        }

        /**
         * @return mixed
         */
        public function getCreditInfo () {
            return $this -> credit_info;
        }

        /**
         * @param mixed $credit_info
         */
        public function setCreditInfo ($credit_info) {
            $this -> credit_info = $credit_info;
        }

        /**
         * @return int
         */
        public function getStatus () {
            return $this -> status;
        }

        /**
         * @param int $status
         */
        public function setStatus ($status) {
            $this -> status = $status;
        }

        /**
         * @return int
         */
        public function getValid () {
            return $this -> valid;
        }

        /**
         * @param int $valid
         */
        public function setValid ($valid) {
            $this -> valid = $valid;
        }

        /**
         * @return mixed
         */
        public function getToken () {
            return $this -> token;
        }

        /**
         * @param mixed $token
         */
        public function setToken ($token) {
            $this -> token = $token;
        }

        /**
         * @return int
         */
        public function getRole () {
            return $this -> role;
        }

        /**
         * @param int $role
         */
        public function setRole ($role) {
            $this -> role = $role;
        }
    }

?>