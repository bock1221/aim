<?php
  class blueprint {
  protected $myname;
  public $email;
  private $addres;
  }
  class radio extends blueprint{
  public $station = '105.9';

  function __construct() {
    $this->myname = 'kieth williams';
    $this->addres = '58 clark st';
     echo 'my hat';
   }
   function __door() {
     $this->email = 'bock1221@yahoo.com'; 
   }
 }
  $kieth = new radio;
    

  print_r($kieth);

             















?>
