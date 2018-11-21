<?php

namespace Bookstore\Domain;

class Person {
  private static $lastId = 0;
  private $id;
  private $email;
  protected $firstnameee;
  protected $surnameggg;


  public function __construct($id ,$firstname, $surname, $email){
    // $this->id = $id;

    // parent::__construct($firstname, $surname);

    if ($id == null){
      $this->id = ++self::$lastId;
    }else {
      $this->id = $id;
      if ($id > self::$lastId){
        self::$lastId = $id;
      }
    }

    $this->firstname = $firstname;
    $this->surname = $surname;
    $this->email = $email;
  }

  public static function getLastId(){
    return self::$lastId;
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
