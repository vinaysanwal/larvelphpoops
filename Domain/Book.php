<?php

namespace Bookstore\Domain;

class Book {
  //properties means variable
  public $isbn;
  public $title;
  public $author;
  public $available;


  public function __construct(int $isbn , string $title , string $author , int $available = 0 ){
       $this->isbn = $isbn;
       $this->title = $title;
       $this->author = $author;
       $this->available = $available;
  }


  public function __toString(){
    $result = $this->title . 'by' . $this->author;

    if (!$this->available){
      $result .= 'Not Avilable';
    }
    return $result;
  }

  //methods are functions ...

  public function getPrintableTitle(){
    $result = $this->title . 'by' . $this->author;

    if (!$this->available){
      $result .= 'Not Avilable';
    }
    return $result;
  }

  public function getCopy(){
    if ($this->available < 1){
      return false;
    }else {
      $this->available--;
      return true;
    }
  }
}

// instantiate the class
 $vinay_sanwal = new Book(999999 , 'vinay sanwal story' , 'vinay sanwal' , 10);


// $vinay_sanwal->isbn = 999999999;
// $vinay_sanwal->title= "Vinay sanwal Story";
// $vinay_sanwal->author = "Vinay Sanwal";
// $vinay_sanwal->available = 0;

if($vinay_sanwal->getCopy()){
  echo 'Here is your copy of ' . $vinay_sanwal->title . '<br>';
}else {
  echo 'Sorry its not available at the moment';
}

echo $vinay_sanwal;
?>
