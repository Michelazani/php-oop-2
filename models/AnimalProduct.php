<?php
    class AnimalProduct {
        public $id;
        // range age intesa come puppy , adult o senior
        public $rangeAgeAnimal;
        public $price;
        public $brand;

        public function __construct($id, $rangeAgeAnimal, $price, $brand) {
            $this->id = $id;
            $this->rangeAgeAnimal = $rangeAgeAnimal;
            $this->price = $price;
            $this->brand = $brand;
        }

        // aggiunta metodi per ottenere dati
        public function getId() {
            return $this->id;
        }

        public function getRangeAnimalCat() {
            return $this->rangeAgeAnimal;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getBrand() {
            return $this->brand;
        }
    }
?>