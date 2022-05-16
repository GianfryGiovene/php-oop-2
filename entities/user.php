<!-- classe utente -->

<?php 
include __DIR__.'/creditCard.php';
    class User{
        protected $name;
        protected $surname;
        protected $email;
        protected $userID;
        protected $discount;
        protected $creditCard;
        protected $isRegistered;

        function __construct($name,$surname,$email,$isRegistered, CreditCard $creditCard){
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->userID = rand(1,100000);
            $this->isRegistered = $isRegistered;

            if ($this->isRegistered){
                $this->discount = 20;
            }else{
                $this->discount = 0;
            }
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

    }


?>