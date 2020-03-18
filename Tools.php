<?php

/**
 * Class Tools
 */
class Tools
{
    /**
     * Tools constructor.
     */
    public function __construct()
    { }

    /**
     * @param string $type type of input
     * @param string $name name of input
     * @param null $label optional : if the input has a label
     * @param null $placeholder optional : if the input has a placeholder
     * @param null $value optional : if the input has a value
     * @param bool $isRequired optional : if the input is required
     * @param bool $isChecked optional : if the input is checked
     */
    public function createInput($type, $name, $label=null, $placeholder=null, $value=null, $isRequired=false, $isChecked=false){
        if ($label !== null)
        {
            echo '<label for="' . $name . '">' . $label . '</label>';
        }

        $required = $isRequired ? " required " : "";
        $checked = $isChecked ? " checked " : "";
        $placeholder = $placeholder === null ? '' : ' placeholder="' . $placeholder . '" ';
        $value = $value === null ? '' : ' value="' . $value . '" ';
        echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '"'. $value . $placeholder . $required . $checked . '>';
    }

    public function createSelect($name, $options, $label)
    {
        echo '<label for= "' . $name . '">' . $label . '</label>';
        echo '<select name ="' . $name . '">';

        foreach($options as $key => $value)
        {
            echo '<option value=' . $value . '>' .  $value . '</option>';
        }
        echo '</select>';
    }


    public function createRadio($name, $options, $text=null)
    {
        if ($text !== null)
        {
            echo '<label>' . $text . '</label>';
        }

        foreach($options as $key => $value)
        {
            $this->createInput("radio", $name, $value, null, $value, true, $key === 0);
        }
    }

    public function createTextArea($name, $row, $cols, $placeholder, $isRequired = false)
    {
        $required = $isRequired ? " required " : "";
        echo '<textarea id=' . $name . ' name=' . $name . ' rows= ' . $row . ' cols= ' . $cols .
            ' placeholder = ' . $placeholder . $required . ' ></textarea>';

    }

}

?>

