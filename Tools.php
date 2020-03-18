<?php


class Tools
{

    public function __construct()
    { }

    public function createInput($type, $name, $value, $label, $required = false){
        echo '<label for= ' . $name . '>' . $label . '</label>';

        if($required){
            echo '<input type="' . $type . '" name="' . $name . '" id ="' . $name . '" value = "' . $value . '" required>';
        }
        else {
            echo '<input type="' . $type . '" name="' . $name . '" id ="' . $name . '" value = "' . $value . '">';
        }
    }

    public function createSelect($name, $options, $label){
        echo '<label for= "' . $name . '">' . $label . '</label>';
        echo '  <select name ="' . $name . '">';

        foreach($options as $key => $value) {
            echo '<option value=' . $value . '>' .  $value . '</option>';
        }
        echo '</select>';
    }


    public function createRadio($options, $label, $name){
        echo '<label for= "' . $name . '">' . $label . '</label>';
        foreach($options as $key => $value) {
            echo '<input type = "radio" name = "' . $name . '" value=' . $value . '>' .  $value;
        }
    }

    public function createTextarea($name, $row, $cols, $placeholder, $required = false){
        if($required){
            echo '<textarea id= "' . $name . '" name= "' . $name . '"  
             rows= ' . $row . ' cols= ' . $cols . ' placeholder = "' . $placeholder . '" required></textarea>';
        }
        else {
            echo '<textarea id=' . $name . ' name=' . $name . '  
             rows= ' . $row . ' cols= ' . $cols . ' placeholder = ' . $placeholder . '></textarea>';
        }
    }

}

?>

