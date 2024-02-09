<?php

class Car
{
  //  Properties are attributes that belong to a class
  public $color;
  public $name;
  public $price;

  public function __construct(string $color, string $name, int $price)
  {
    $this->color = $color;
    $this->name = $name;
    $this->price = $price;
  }

  public function getColor()
  {
    echo $this->color;
  }
}

class Toyota extends Car
{
  public $color;
  public $type;
  public $name;
  public $price;

  public function __construct(string $color, string $name, int $price, string $type)
  {
    parent::__construct($color, $name, $price);
    $this->type = $type;
  }

  public function get_type()
  {
    return $this->type;
  }
}

$avanza = new Toyota('black', 'avanza', 10, 'ngops');
echo $avanza->get_type();
