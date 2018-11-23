<?php

namespace Bookstore\Domain;
use Bookstore\Utils\Unique;

class Person {

  use Unique;

  private $email;
  protected $firstnameee;
  protected $surname;


  public function __construct($id ,$firstname, $surname, $email){
    // $this->id = $id;

    // parent::__construct($firstname, $surname);

    $this->setId($id);
    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->email = $email;
  }

  // getters
    public function getFirstName(){
      return $this->firstname;
    }

    public function getSurName(){
      return $this->surname;
    }

    public function getFullName(){
      return strtoupper($this->firstname . ' ' . $this->surname);
    }

    public function getEmail(){
      return $this->email;
    }


  //setters or mutators
    public function setEmail( string $email){
      $this->email = $email;
    }

  //method overiding
    public function sayHi(){
      return "Hello bro" . $this->firstname . parent::sayHi();
    }


}

?>
