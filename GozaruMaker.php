<?php
  class GozaruMaker {
    //パラメーター
    private $moji;

    function setName($moji){
      $this->moji = $moji;
    }

    function getName(){
      return $this->moji."でござる";
    }
  }

  $what = new GozaruMaker();
  $what->setName("ゆうと");
  echo $what->getName();
?>
