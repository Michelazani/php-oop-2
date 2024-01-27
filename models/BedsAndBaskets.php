<?php
// importo file padre per poi richiamarlo
require_once __DIR__ . '/AnimalProduct.php';

    class BedsAndBaskets extends AnimalProduct{
        // se small, medium, large
        public $animalSize;
        // dimensione della cuccia
        public $dimension;
        // round, square, rectangular
        public $shape;
    
        // unione delle proprietà generali+specifica della classe figlio
        public function __construct($id, $rangeAgeAnimal, $price, $brand, $animalSize, $dimension, $shape) {
            // richiama le proprietà generali 
            parent::__construct($id, $rangeAgeAnimal, $price, $brand);
            // aggiunta proprietà del figlio
            $this->animalSize = $animalSize;
            $this->dimension = $dimension;
            $this->shape = $shape;
        }

        public function getAnimalSize() {
            return $this->animalSize;
        }
        public function getDimension() {
            return $this->dimension;
        }
        public function getShape() {
            return $this->shape;
            }
    };

    /* ok si vede
    $squareBed = new BedsAndBaskets ('1', 'puppy', '20.50', 'cosma', 'small', '50x50', 'square');
    var_dump($squareBed);
    */
?>