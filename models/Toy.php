<?php
// importo file padre per poi richiamarlo
require_once __DIR__ . '/AnimalProduct.php';

    class Toy extends AnimalProduct{
        public $material;
        // balls, ropes, frisbee, fillable ecc.
        public $productType;
    
        // unione delle proprietà generali+specifica della classe figlio
        public function __construct($id, $rangeAgeAnimal, $price, $brand, $material, $productType) {
            // richiama le proprietà generali 
            parent::__construct($id, $rangeAgeAnimal, $price, $brand);
            // aggiunta proprietà del figlio
            $this->material = $material;
            $this->productType = $productType;
        }

        public function getMaterial() {
            return $this->material;
            }
        public function getProductType() {
            return $this->productType;
            }
    };

    /* ok si vede
    $kong = new Toy ('1', 'adult', '1.50', 'ferplast', 'rubber', 'balls');
    var_dump($kong);
    */
?>