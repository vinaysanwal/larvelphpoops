<?php

namespace Bookstore\Utils;
use Exception;

trait Unique {

  private static $lastId = 0;
  private $id;

  public function setId(int $id){

    try {
      if($id < 1){
         throw new Exception('Id can not be a negative num.');
      }


      if ($id == null){
        $this->id = ++self::$lastId;
      }else {
        $this->id = $id;
        if ($id > self::$lastId){
          self::$lastId = $id;
        }
      }

    }
  catch(Exception $e){
       echo $e->getMessage();
    }
    finally {
      echo 'Done with try and catch';
    }
  }

  

  public static function getLastId(){
    return self::$lastId;
  }


  public function getId(){
    return $this->id;
  }


}

?>
