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
    private $gender;
    private $story;

    /**
     * Triceratops constructor.
     */
    public function __construct($life, $damage, $gender, $story)
    {
        $this->life   = $life;
        $this->damage = $damage;
        $this->gender = $gender;
        $this->story = $story;

        echo "Triceratops { Vie: ".$this->life.", Dégats: ".$this->damage.", Sexe: ".$this->gender. "} créé.";
        echo "<br/>";
        echo "Son histoire : ". $story . "";
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

