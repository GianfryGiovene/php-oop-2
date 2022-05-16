<!-- 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Animals E-commerce</title>
</head>

<?php 
    
    include_once  __DIR__.'/entities/user.php';
    include_once  __DIR__.'/entities/creditCard.php';
    include_once  __DIR__.'/entities/product.php';
    // include_once  __DIR__.'/entities/food.php';
    // include_once  __DIR__.'/entities/kennel.php';
    // include_once  __DIR__.'/entities/toy.php';
        
    $utente = new User ('Pippo','Palermo','pippo@pino.it',true, $creditCard = new CreditCard('123456789','20/20/2025'));
    echo '<h3>Dati Utente </h3>';
    echo ('nome: '.$utente->setName(). '<br>');
    echo ('cognome: '.$utente->setSurname(). '<br>');
    echo ('ID utente: '.$utente->setUserID(). '<br>');
    echo ('email: '.$utente->setEmail(). '<br>');
    echo ('sconto: '.$utente->setDiscount(). '<br>');
    var_dump($creditCard);
    echo '<br>';

    $product = new Product ('Fifillo','Valenzana',20.50,'Orso',12345,true);
    var_dump($product);

    
    

    
?>


<body>
    
</body>
</html>




