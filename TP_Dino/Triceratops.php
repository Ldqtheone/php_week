<?php

/**
 * Class Triceratops
 */
class Triceratops
{
    /**
     * @var int $life
     * @var int $damage
     */
    private $life;
    private $damage;

    /**
     * Triceratops constructor.
     * @param int $life
     * @param int $damage
     * @param bool $isMale
     */
    public function __construct($life, $damage, $isMale)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->isMale = $isMale;
        echo "<p class='dinoLog'>Triceratops { life: " . $this->life . ", damage: " . $this->damage . ", sex : " . ($this->isMale ? "Male" : "Female") . "} created.</p><br />";
    }

    /**
     * Getter of triceratops' life
     * @return int
     */
    public function getLife() : int
    {
        echo "<p class='dinoLog'>Triceratops life: " . $this->life . "</p><br />";
        return $this->life;
    }

    /**
     * Do a mortal attack
     * @param Tyrex $target
     */
    public function attackMortel($target) : void
    {
        echo "<p class='dinoLog'>Triceratops mortal attack: " . $target->getLife() . " damage</p><br />";
        $target->receiveDamage($target->getLife());
    }

    /**
     * Receive damage
     * @param int $damage damage received
     */
    public function receiveDamage($damage) : void
    {
        echo "<p class='dinoLog'>Triceratops receive: " . $damage . " damage</p><br />";
        $this->life -= $damage;
    }
}

?>

