<?php


/**
 * Class Tyrex
 */
class Tyrex
{
    /**
     * @var $life
     * @var $damage
     */
    private $life;
    private $damage;
    private $isMale;

    /**
     * Tyrex constructor.
     * @param $life
     * @param $damage
     * @param $isMale
     */
    public function __construct($life, $damage, $isMale)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->isMale = $isMale;
        echo "<p class='dinoLog'>Tyrex { life: " . $this->life . ", damage: " . $this->damage . ", sex : " . ($this->isMale ? "Male" : "Female") . "} created.</p><br />";
    }

    /**
     * get life of tyrex
     * @return int
     */
    public function getLife()
    {
        echo "<p class='dinoLog'>Tyrex life: " . $this->life . "</p><br />";
        return $this->life;
    }


    /**
     * Do a normal attack
     * @param $target
     */
    public function attackDouce($target)
    {
        echo "<p class='dinoLog'>Tyrex normal attack: " . $this->damage . " damage</p><br />";
        $target->receiveDamage($this->damage);
    }

    /**
     * Do a special attack
     * @param $target
     */
    public function attackSpecial($target)
    {
        echo "<p class='dinoLog'>Tyrex special attack: " . ($this->damage * 2) . " damage</p><br />";
        $target->receiveDamage($this->damage * 2);
    }

    /**
     * Receive damage
     * @param $damage  the damage received
     */
    public function receiveDamage($damage)
    {
        echo "<p class='dinoLog'>Tyrex receive: " . $damage . " damage</p><br />";
        $this->life -= $damage;
    }
}

?>

