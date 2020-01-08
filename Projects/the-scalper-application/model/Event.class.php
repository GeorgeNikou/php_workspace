<?php

    /**
     * @description : Event class to store all event information
     * @author      : <[<george.nikou05@gmail.com>, <m.derubertis@hotmail.com>]>
     * @version     [<1.0>]
     * @created     : 6/18/2019
     * @lastmodified: 6/21/2019 <m.derubertis@hotmail.com>
     * @copyright   [George Nikou]
     */
    class Event {

        // Attributes
        private $id = 0;
        private $name;
        private $description = 'No description provided.';
        private $type;
        private $image;
        private $date;
        private $location;
        private $duration;
        private $num_tickets;

        /**
         * Create a new person upon construction
         *
         * @param [integer] $id
         * @param [String] $name
         * @param [String] $type
         * @param [String] $date
         * @param [String] $location
         * @param [integer] $duration
         * @param [integer] $num_tickets
         */
        public function __construct ($array) {
            foreach ($array as $key => $value)
                if ($key == 'image')
                    $this ->{$key} = base64_encode($value);
                else
                    $this ->{$key} = $value;
        }

        public function toArray () {
            $array = [];
            $array['id'] = $this -> id;
            $array['name'] = $this -> name;
            $array['type'] = $this -> type;
            $array['image'] = $this -> image;
            $array['date'] = $this -> date;
            $array['location'] = $this -> location;
            $array['duration'] = $this -> duration;
            $array['num_tickets'] = $this -> num_tickets;
            return $array;
        }

        // display with toString method

        /**
         * @return string
         */
        public function __toString () {
            $str = "id: " . $this -> id . "<br>";
            $str .= "Event name: " . $this -> name . "<br>";
            $str .= "Event type: " . $this -> type . "<br>";
            $str .= "Event date: " . $this -> date . "<br>";
            $str .= "Event location: " . $this -> location . "<br>";
            $str .= "Event duration: " . $this -> duration . "<br>";
            $str .= "Number of tickets: " . $this -> num_tickets . "<br>";
            return $str;
        }

        /*Getters and Setters BELOW*/
        /**
         * @return int
         */
        public function getId (): int {
            return $this -> id;
        }

        /**
         * @param int $id
         */
        public function setId (int $id): void {
            $this -> id = $id;
        }

        /**
         * @return mixed
         */
        public function getName () {
            return $this -> name;
        }

        /**
         * @param mixed $name
         */
        public function setName ($name): void {
            $this -> name = $name;
        }

        /**
         * @return string
         */
        public function getDescription (): string {
            return $this -> description;
        }

        /**
         * @param string $description
         */
        public function setDescription (string $description): void {
            $this -> description = $description;
        }

        /**
         * @return mixed
         */
        public function getType () {
            return $this -> type;
        }

        /**
         * @param mixed $type
         */
        public function setType ($type): void {
            $this -> type = $type;
        }

        /**
         * @return mixed
         */
        public function getImage () {
            return $this -> image;
        }

        /**
         * @param mixed $image
         */
        public function setImage ($image): void {
            $this -> image = $image;
        }

        /**
         * @return mixed
         */
        public function getDate () {
            return $this -> date;
        }

        /**
         * @param mixed $date
         */
        public function setDate ($date): void {
            $this -> date = $date;
        }

        /**
         * @return mixed
         */
        public function getLocation () {
            return $this -> location;
        }

        /**
         * @param mixed $location
         */
        public function setLocation ($location): void {
            $this -> location = $location;
        }

        /**
         * @return mixed
         */
        public function getDuration () {
            return $this -> duration;
        }

        /**
         * @param mixed $duration
         */
        public function setDuration ($duration): void {
            $this -> duration = $duration;
        }

        /**
         * @return mixed
         */
        public function getNumTickets () {
            return $this -> num_tickets;
        }

        /**
         * @param mixed $num_tickets
         */
        public function setNumTickets ($num_tickets): void {
            $this -> num_tickets = $num_tickets;
        }


    }

?>