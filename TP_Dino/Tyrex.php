<?php

/**
 * Class Tyrex
 */
class Tyrex
{
    /**
     * @var int $life
     * @var int $damage
     */
    private $life;
    private $damage;
    private $isMale;

    /**
     * Tyrex constructor.
     * @param int $life
     * @param int $damage
     * @param bool $isMale
     */
    public function __construct($life, $damage, $isMale)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->isMale = $isMale;
        echo "<p class='dinoLog'>Tyrex { life: " . $this->life . ", damage: " . $this->damage . ", sex : " . ($this->isMale ? "Male" : "Female") . "} created.</p><br />";
    }

    /**
     * Getter of Tyrex's life
     * @return int
     */
    public function getLife() : int
    {
        echo "<p class='dinoLog'>Tyrex life: " . $this->life . "</p><br />";
        return $this->life;
    }

    /**
     * Do a normal attack
     * @param Triceratops $target
     */
    public function attackDouce($target) : void
    {
        echo "<p class='dinoLog'>Tyrex normal attack: " . $this->damage . " damage</p><br />";
        $target->receiveDamage($this->damage);
    }

    /**
     * Do a special attack
     * @param Triceratops $target
     */
    public function attackSpecial($target) : void
    {
        echo "<p class='dinoLog'>Tyrex special attack: " . ($this->damage * 2) . " damage</p><br />";
        $target->receiveDamage($this->damage * 2);
    }

    /**
     * Receive damage
     * @param int $damage The damage received
     */
    public function receiveDamage($damage) : void
    {
        echo "<p class='dinoLog'>Tyrex receive: " . $damage . " damage</p><br />";
        $this->life -= $damage;
    }
}

?>

