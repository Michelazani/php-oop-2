<?php
    class AnimalProduct {
        public $id;
        public $imgUrl;
        // range age intesa come puppy , adult o senior
        public $rangeAgeAnimal;
        public $price;
        public $brand;

        public function __construct($id,$imgUrl, $rangeAgeAnimal, $price, $brand) {
            $this->id = $id;
            $this->imgUrl = $imgUrl;
            $this->rangeAgeAnimal = $rangeAgeAnimal;
            $this->price = $price;
            $this->brand = $brand;
        }

    
        // aggiunta metodi per ottenere dati
        public function getId() {
            return $this->id;
        }

        public function getUrl() {
            return $this->imgUrl;
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