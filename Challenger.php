<?php

class Challenger
{
    private $_name;
    private $_stamina;
    private $_speed;
    private $_strengh;

public function __construct($name, $stamina, $speed, $strengh)    
{
    $this->setName($name);
    $this->setStamina($stamina);
    $this->setSpeed($speed);
    $this->setStrengh($strengh);

}

public function setName($name)
{
    if(is_string($name))
    {
        $this->_name = $name;
    }
}

public function getName()
{
    return $this->_name;
}

public function setStamina($stamina)
{
    if(is_int($stamina))
    {
        $this->_stamina = $stamina;
    }
}

public function getStamina()
{
    return $this->_stamina;
}

public function setSpeed($speed)
{
    if(is_int($speed))
    {
        $this->_speed = $speed;
    }
}

public function getSpeed()
{
    return $this->_speed;
}

public function setStrengh($strengh)
{
    if(is_int($strengh))
    {
        $this->_strengh = $strengh;
    }
}

public function getStrengh()
{
    return $this->_strengh;
}

}

$challenger = new Challenger("Onizuka", 19562, 86, 1861);
// echo "Name : " . $challenger->getName() . "\n";
// echo "Stamina : " . $challenger->getStamina() . "\n";
// echo "Speed : " . $challenger->getSpeed() . "\n";
// echo "Strengh : " . $challenger->getStrengh() . "\n";


?>