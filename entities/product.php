<!-- classe prodotto -->

<?php 
    class Product{
        protected $name;
        protected $brand;
        protected $price;
        protected $kindOfAnimal;
        protected $productCode;
        protected $inStock;

        function __construct($name,$brand,$price,$kindOfAnimal,$productCode,$inStock){
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->kindOfAnimal = $kindOfAnimal;
            $this->productCode = $productCode;
            $this->inStock = $inStock;
        }
        

    }

?>