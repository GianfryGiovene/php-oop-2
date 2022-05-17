<!-- classe toy -->

<?php 
    include_once __DIR__. '/product.php';

    class Toy extends Product{
        private $material;
        private $intendedUsePet;
        

        function __construct($material, $intendedUsePet){
            $this->material = $material;
            $this->intendedUsePet = $intendedUsePet;
        }


        public function setMaterial($material){
            $this->material = $material;
        }

        public function setIntendedUsePet($intendedUsePet){
            $this->intendedUsePet = $intendedUsePet;
        }

        public function getMaterial(){
            return $this->material;
        }

        public function getIntendedUsePet(){
            return $this->intendedUsePet;
        }
    }
?>