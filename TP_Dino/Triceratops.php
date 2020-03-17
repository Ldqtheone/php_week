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
     * @param $life
     * @param $damage
     * @param $isMale
     */
    public function __construct($life, $damage, $isMale)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->isMale = $isMale;
        echo "<p class='dinoLog'>Triceratops { life: " . $this->life . ", damage: " . $this->damage . ", sex : " . ($this->isMale ? "Male" : "Female") . "} created.</p><br />";
    }

    /**
     * get life of triceratops
     * @return int
     */
    public function getLife()
    {
        echo "<p class='dinoLog'>Triceratops life: " . $this->life . "</p><br />";
        return $this->life;
    }

    /**
     * Do a mortal attack
     * @param $target
     */
    public function attackMortel($target)
    {
        echo "<p class='dinoLog'>Triceratops mortal attack: " . $target->getLife() . " damage</p><br />";
        $target->receiveDamage($target->getLife());
    }

    /**
     * Receive damage
     * @param $damage the damage received
     */
    public function receiveDamage($damage)
    {
        echo "<p class='dinoLog'>Triceratops receive: " . $damage . " damage</p><br />";
        $this->life -= $damage;
    }
}

?>

