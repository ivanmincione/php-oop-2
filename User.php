<?php

    class User {
        public $user_id;
        public $first_name;
        public $last_name;
        public $age;
        public $email;
        public $nationality;

        public function __construct ($_first_name, $_last_name) {
           $this->first_name = $_first_name;
           $this->last_name = $_last_name;
        }


        public function getName() {
            return $this->first_name;
        }

        public function getLastName() {
            return $this->last_name;
        }

        public function setAge($_age) {
            if ($_age > 0 && $_age <= 120 && is_numeric($_age) ) {
                $this->age = $_age;
            } else if (!is_numeric($_age)) {
                throw new Exception ("Il valore inserito non è numerico!");
            } else {
                throw new Exception ("Età non valida, il range di inserimento è da 1 a 120!");
            }
        }

        public function getAge() {
            return $this->age;
        }

    }



 ?>
