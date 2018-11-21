<?php

namespace Bookstore\Domain;

interface Customer extends Payer{

  //abstract methods...
public function getMonthlyFee();
public function getAmountToBorrow();
public function getType();
}


?>
