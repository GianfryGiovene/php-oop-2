<!-- classe utente -->

<?php 
include __DIR__.'/creditCard.php';
    class User{
        protected $name;
        protected $surname;
        protected $email;
        protected $userID;
        protected $discount = 0;
        protected $creditCard;

        function __construct($name,$surname,$email,CreditCard $creditCard){
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->userID = rand(1,100000);
        }

        public function setName(){
            return $this->name;
        }

        public function setSurname(){
            return $this->surname;
        }
        public function setEmail(){
            return $this->email;
        }
        public function setUserID(){
            return $this->userID;
        }
        public function setDiscount(){
            if($this->discount == 0){
                return '-';
            }else{
                return $this->discount.'%';
            }
        }

        public function setCreditCard(){
            return $this->creditCard;
        }

        public function canBuy(){
            $userCard = $this->CreditCard;
            if($userCard->isExpired){
                return 'Goditi gli acquisti';
            }else{
                return 'La tua carta è scaduta';
            }
        }
    }


?>