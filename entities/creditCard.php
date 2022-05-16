<!-- class credit card -->


<?php 
    class CreditCard {
        protected $cardNumber;
        protected $expirationDate;
        public $isExpired;

        function __construct($cardNumber, $expirationDate){
            $this->cardNumber = $cardNumber;
            $this->expirationDate = $expirationDate;
        }

        public function getCardExpirationDate(){
            if($this->expirationDate < date("d/m/Y")){
                $this->isExpired = false;
            }else{
                $this->isExpired = true;
            }
        }


    }
?>

