<?php

    // definire la struttura di una tabella users che contiene i dati degli utenti di un blog
    // definire una classe User che "mappa" la tabella users
    // creare alcune istanze della classe User per stampare i dati degli utenti

    require "User.php";

    $user1 = new User("Luca", "Neri", "20");
    echo "<h1> NOME : " . $user1->getName() . "</h1>";
    echo "<h1> COGNOME : " . $user1->getLastName() . "</h1>";
    echo "<h1> ETA' : " . $user1->getAge() . "</h1>" . "<br>";

    $user2 = new User("Paolo", "Rossi", "15");
    echo "<h1> NOME : " . $user2->getName() . "</h1>";
    echo "<h1> COGNOME : " . $user2->getLastName() . "</h1>";
    echo "<h1> ETA' : " . $user2->getAge() . "</h1>" . "<br>";

    $user3 = new User("Mario", "Bianchi", "25");
    echo "<h1> NOME : " . $user3->getName() . "</h1>";
    echo "<h1> COGNOME : " . $user3->getLastName() . "</h1>";
    echo "<h1> ETA' : " . $user3->getAge() . "</h1>" . "<br>";


 ?>
