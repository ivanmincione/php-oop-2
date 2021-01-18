<?php

    class User {
        public $user_id;
        public $first_name;
        public $last_name;
        public $age;
        public $email;
        public $nationality;

        public function __construct ($_first_name, $_last_name, $_age) {
           $this->first_name = $_first_name;
           $this->last_name = $_last_name;
           $this->age = $_age;
        }


        public function getName() {
            return $this->first_name;
        }

        public function getLastName() {
            return $this->last_name;
        }

        public function getAge() {
            return $this->age;
        }

    }



 ?>
