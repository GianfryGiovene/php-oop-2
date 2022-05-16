<!-- class credit card -->


<?php 
    class CreditCard {
        protected $cardNumber;
        protected $expirationDate;
        protected $isExpired;

        function __construct($cardNumber, $expirationDate){
            $this->cardNumber = $cardNumber;
            $this->expirationDate = $expirationDate;
        }
        // da rivedere, non funziona
        public function getCardExpirationDate(){
            if($this->expirationDate < date("d/m/Y")){
                $this->isExpired = false;
            }else{
                $this->isExpired = true;
            }
        }


    }
?>

