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
    private $gender;
    private $story;

    /**
     * Tyrex constructor.
     */
    public function __construct($life, $damage, $gender, $story)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->gender = $gender;
        $this->story = $story;

        echo "Tyrex { Vie: ".$this->life.", Dégats: ".$this->damage.", Sexe: ".$this->gender. "} créé.";
        echo "<br/>";
        echo "Son histoire : ". $story . "";

        echo "<br/>";
    }

    /**
     * get life of tyrex
     * @return int
     */
    public function getLife()
    {
        echo "Tyrex life: ".$this->life;
        echo "<br/>";
        return $this->life;
    }

    /**
     * Do a normal attack
     * @param $target
     */
    public function attackDouce($target)
    {
        echo "Tyrex normal attack: ".($this->damage)." damage";
        echo "<br/>";
        $target->receiveDamage($this->damage);
    }

    /**
     * Do a special attack
     * @param $target
     */
    public function attackSpecial($target)
    {
        echo "Tyrex special attack: ".($this->damage * 2)." damage";
        echo "<br/>";
        $target->receiveDamage($this->damage * 2);
    }

    /**
     * Receive damage
     * @param $damage the damage received
     */
    public function receiveDamage($damage)
    {
        echo "Tyrex receive: ".$damage." damage";
        echo "<br/>";
        $this->life -= $damage;
    }
}

?>

