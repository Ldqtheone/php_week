<?php


/**
 * Class Triceratops
 */
class Triceratops
{
    /**
     * @var $life
     * @var $damage
     */
    private $life;
    private $damage;

    /**
     * Triceratops constructor.
     */
    public function __construct()
    {
        $this->life   = 600;
        $this->damage = 40;
        echo "Triceratops { life: ".$this->life.", damage: ".$this->damage." } created.";
        echo "<br/>";
    }

    /**
     * get life of triceratops
     * @return int
     */
    public function getLife()
    {
        echo "Triceratops life: ".$this->life;
        echo "<br/>";
        return $this->life;
    }

    /**
     * Do a mortal attack
     * @param $target
     */
    public function attackMortel($target)
    {
        echo "Triceratops mortal attack: ".$target->getLife()." damage";
        echo "<br/>";
        $target->receiveDamage($target->getLife());
    }

    /**
     * Receive damage
     * @param $damage the damage received
     */
    public function receiveDamage($damage)
    {
        echo "Triceratops receive: ".$damage." damage";
        echo "<br/>";
        $this->life -= $damage;
    }
}

?>

