<?php

   require_once __DIR__ . '/Book.php';
   require_once __DIR__ . '/Customer.php';

   $vinay_sanwal = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);


   $first_customer = new Customer(1 , "Sanjay" , "Parihar" , "sanjurtu@gmail.com");


   var_dump($first_customer);
?>
