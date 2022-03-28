<?php

class Cars {

public $nbWheels;
public $currentSpeed;
public $color;
public $nbSeats;
public $energy;
public $levelEnergy;

}
public function forward()
{
    $this->currentSpeed;
    return "Go !";
}
public function brake(): string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}
public function start() 
{
    $this->currentSpeed = 20;
}
public function getnbWheels(): int 
{
$this->nbWheels;
}
public function getcurrentSpeed(): int 
{
    $this->currentSpeed;
}
public function getcolor(): string 
{
    $this->color;
}
public function getnbSeats(): int 
{
    $this->nbSeats;
}
public function getenergy(): int 
{
    $this->energy;
}
public function getlevelEnergy(): int 
{
    $this->levelEnergy;
}
public function __construct(string $color, int $nbSeats, string $energy)
{
          $this->color = $color;
          $this->nbSeat = $nbSeat;
          $this->energy = $energy;
}

?>
