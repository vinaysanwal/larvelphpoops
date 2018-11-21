<?php

namespace Bookstore\Domain\Customer;


use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;


class Premium extends Person implements Customer {

   public function getMonthlyFee(){
      return 15;
   }

   public function getAmountToBorrow(){
     return 13;
   }

   public function getType(){
     return 'Premium';
   }
   public function pay(float $amount){
     return "Paying $amount";
   }

   public function isExtentOfTaxes(){
     return 'Tax is waiting for You';
   }
}


?>
