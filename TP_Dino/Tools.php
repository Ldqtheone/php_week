<?php


class Tools
{

    public function __construct()
    { }

    public function CreateInput($type, $name, $label, $placeholder)
    {
        echo '<label for="' . $name . '" placeholder="' . $placeholder . '">' . $label . '</label>';
        echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" required />';
    }

    public function CreateInputSubmit($name, $value)
    {
        echo '<input type="submit" name="' . $name . '" id="' . $name . '" value="' . $value . '"/>';
    }

    public function CreateInputRadio($name, $value, $label)
    {
        echo '<label for="' . $name . '">' . $label . '</label>';
        echo '<input type="radio" name="' . $name . '" value="' . $value . '" required >';
    }

    public function CreateSelect($name, $options)
    {
        echo '<select name="' . $name . '" required >';
        for ($i = 0; $i < sizeof($options); $i++)
        {
            echo '<option value=' . $options[$i] . '>' . $options[$i] . '</option>';
        }
        echo '</select>';
    }

    public function CreateTextArea($name, $label)
    {
        echo '<label for="' . $name . '">' . $label . '</label>';
        echo '<textarea id="' . $name . '" name="' . $name . '"></textarea>';
    }

}

?>

