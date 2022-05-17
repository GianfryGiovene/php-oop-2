<!-- classe kennel -->

<?php 
    include_once __DIR__. '/product.php';

    class Kennel extends Product{
        private $size;
        private $material;
        private $type;
        private $price;
        private $inStock;
        

        function __construct($size,$material,$type,$price,$inStock){
            $this->size = $size;
            $this->material = $material;
            $this->type = $type;
            $this->price = $price;
            $this->inStock = $inStock;
        }
        public function setType($type){
            $this->type = $type;
        }

        public function getSize(){
            return $this->size;
        }
        public function getType(){
            return $this->type;
        }
    }

?>