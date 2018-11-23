<?php

namespace Bookstore\Domain;

use Bookstore\Utils\Contract;

use Bookstore\Utils\Communicator;


class Manager {
  use Contract, Communicator{
    Contract::sign insteadof Communicator;
    Communicator::sign as makeSign;
  }

  public function sign(){
    echo "It is from the class itself";
  }
};

?>
