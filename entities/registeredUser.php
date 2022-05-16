<!-- classe utente registrato -->


<?php 
    include_once __DIR__.'/user.php';
    class RegisteredUser extends User {
        protected $password;
        protected $discount = 20;

        function __construct($password){
            $this->password = $password;
            parent::__construct($name,$username,$email);
        }
    }
?>