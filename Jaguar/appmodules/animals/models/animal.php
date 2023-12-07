<?php
    #[AllowDynamicProperties]
    class Animal {
        public $animal_id;
        public function __construct() {
            //$this->animal_id = 0;
            $this->nombre='kike';
            $this->edad = 0;
            $this->numerodehabitad = 0;
            $this->tipodealimentacion='carne';
            $this->fechadeingreso=0;
        }
    }
?>