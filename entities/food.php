<!-- classe food -->

<?php 
    include_once __DIR__.'/product.php';
    class Food extends Product{
        private $specie;
        private $weight;
        private $age;

        function __construct($specie, $weight, $age){
            $this->specie = $specie;
            $this->weight = $weight;
            $this->age = $age;
        }

        public function getSpecie(){
            return $this->specie;
        }
        public function getWeight(){
            return $this->weight;
        }

        public function getAge(){
            return $this->age;
        }
    }

?>