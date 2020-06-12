<?php

  class teksti{
    private $str;

    public function _construct($str)
    {
      $this->str=$str;
    }
    public function setStr($str)
    {
      $this->str=$str;

    }
    public  function getStr()
     {
       return $this->str;
     }
  }
 class teksti1 extends teksti
  {   public $str=" ";
    public function _construct($str)
    {
          parent::_construct($str);

     }
         public  function getStr()
          {
           return parent::getStr();
          }


  }



?>