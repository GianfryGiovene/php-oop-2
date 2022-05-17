<!-- classe prodotto -->

<?php 
    class Product{
        protected $name;
        protected $brand;
        protected $kindOfAnimal;
        protected $productCode;

        function __construct($name,$brand,$price,$kindOfAnimal,$productCode){
            $this->name = $name;
            $this->brand = $brand;
            $this->kindOfAnimal = $kindOfAnimal;
            $this->productCode = $productCode;
        }
        

    }

?>