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
   }
  $kieth = new radio;
  $keith2 = new radio;
  $kieth->email = 'kieth@webizly.com';
  print_r($kieth); 

             















?>
