<?php
interface Animal
{
  function getKind();
}

class Dog implements Animal
{
  public function __construct( $kind ) { }

  public function getKind()
  {
    return "Dog";
  }
}

class AnimalFactory
{
  public static function Create( $kind )
  {
    return new Dog( $kind );
  }
}

$uo = AnimalFactory::Create( "Dog" );
echo( $uo->getKind()."\n" );
?>
