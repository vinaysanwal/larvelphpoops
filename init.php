<?php

   use Bookstore\Domain\Book;
   use Bookstore\Domain\Customer;
   use Bookstore\Domain\Manager;
   use Bookstore\Domain\Customer\Basic;
   use Bookstore\Domain\Customer\Premium;
    use Bookstore\Domain\Payer;

   //autoloader function to autoload classes

   function autoloader($classname){
     $lastSlash = strpos($classname, '\\') + 1;
     $classname = substr($classname, $lastSlash);
     $directory = str_replace('\\' , '/' , $classname);
     $filename = __DIR__ . '/' . $directory . '.php';

     require_once $filename;
   }

   spl_autoload_register('autoloader');

   // require_once __DIR__ . '/Domain/Book.php';
   // require_once __DIR__ . '/Domain/Customer.php';

   $vinay_sanwal = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);


   //$first_customer = new Customer(null , "Sanjay" , "Parihar" , "sanjurtu@gmail.com");
  //  $second_customer = new Customer(12 , "arayan" , "arya" , "aryan@gmail.com");
  // $third_customer = new Customer(100 , "ashiqa" , "ashiqa" , "ashiqa@gmail.com");
  //
  //
  //  var_dump($first_customer->getFullName());
  //  var_dump($first_customer->getEmail());
  //  var_dump($first_customer->setEmail('akansha@gmail.com'));
  //  var_dump($first_customer->getEmail());
  //
  //  var_dump($first_customer::getLastId());
  //
  //  var_dump($first_customer->sayHi());
  //
  //  //reference it using existing instance....
  //  $first_customer::getLastId();
  //
  //  //reference it using class name itself

   //Customer::getLastId();


   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";

  // echo "This is another Results to check if person is valid or not";

   function checkIfValid(Customer $customer , $books){
     return $customer->getAmountToBorrow() >= count($books);
   }


   function processPayment(Payer $payer, float $amount) {
     if($payer->isExtentOfTaxes()){
       return $payer->isExtentOfTaxes();
     }else {
       $amount *= 1.20;
     }

     $payer->pay($amount);
   }


$vinay_sanwal = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);
$vinay_sanwal2 = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);
$vinay_sanwal3 = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);
$vinay_sanwal4 = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);
$vinay_sanwal5 = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);

      $first_customer = new Basic(-2 , "Sanjay" , "Parihar" , "sanjurtu@gmail.com");
        //$second_customer = new Premium(null , "bakra" , "Parihar" , "sanjurtu@gmail.com");
     var_dump($first_customer);
  // var_dump(checkIfValid($first_customer , [$vinay_sanwal , $vinay_sanwal2 , $vinay_sanwal3, $vinay_sanwal4 , $vinay_sanwal5]));
   //var_dump($first_customer->getId());
   // var_dump($second_customer ->getType());
   // var_dump($second_customer ->getFirstName());
   // var_dump($first_customer ->getFirstName());
   //
   //  var_dump(processPayment($first_customer , 10.0));
   //  var_dump(processPayment($second_customer , 10.0));
   // var_dump($first_customer->isExtentOfTaxes());

   $manager = new Manager();
  echo  $manager->sign();
  echo "<br>";
  echo  $manager->makeSign();

?>
