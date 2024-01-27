<?php

    // categoria per animale se cane o gatto
    class AnimalCategory{
        public $animal;
        public $description;
 
        public function __construct($animal, $description){
            $this->animal = $animal;
            $this->description = $description;
        }
    }
    
    // creare istanza con cane e gatto 
    $dog = new AnimalCategory('dog', 'A dog is a friendly, domesticated animal that comes in various breeds, sizes, and colors');
    $cat = new AnimalCategory('cat', 'A cat is a small, domesticated feline known for its independent and playful nature');

    /* ok si vede
    var_dump($dog, $cat);
    */
?>