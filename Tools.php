<?php


class Tools
{

    public function __construct()
    { }

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


    public function createRadio($options, $label, $name)
    {
        echo '<label for= "' . $name . '">' . $label . '</label>';
        foreach($options as $key => $value)
        {
            echo '<input type = "radio" name = "' . $name . '" value=' . $value . '>' .  $value;
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

