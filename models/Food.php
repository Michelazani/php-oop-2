<?php
// importo file padre per poi richiamarlo
require_once __DIR__ . '/AnimalProduct.php';

    class Food extends AnimalProduct{
        // inteso come dry, wet food or snack
        public $type;
    
        // unione delle proprietà generali+specifica della classe figlio
        public function __construct($id,$imgUrl, $rangeAgeAnimal, $price, $brand, $type) {
            // richiama le proprietà generali 
            parent::__construct($id,$imgUrl, $rangeAgeAnimal, $price, $brand);
            // aggiunta proprietà del figlio
            $this->type = $type;
        }

        // metodi per visulizzare proprietà figlio
        public function getType() {
                return $this->type;
                }
            }



    /* ok si vede
    $royalCanin = new Food ('1', 'puppy', '2.50', 'royal canin', 'dry food');
    var_dump($royalCanin);
    */
?>