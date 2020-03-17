<?php

class Form
{
    public function __construct(){

    }

    public function createInput($type, $name, $value, $label){
        echo '<label for= ' . $name . '>' . $label . '</label>';
        echo '<input type=' . $type . ' name=' . $name . ' id =' . $name . ' value = ' . $value . '>';
    }

    public function createSelect($name, $options, $label){
        echo '<label for= ' . $name . '>' . $label . '</label>';
        echo '  <select name =' . $name . '>';

        foreach($options as $key => $value) {
            echo '<option value=' . $key . '>' .  $value . '</option>';
        }
        echo '</select>';
    }


    public function createRadio($options, $label, $name){
        echo '<label for= ' . $name . '>' . $label . '</label>';
        foreach($options as $key => $value) {
            echo '<input type = "radio" name = ' . $name . ' value=' . $key . '>' .  $value;
        }
    }

    public function createTextarea($name, $row, $cols, $placeholder){
        echo '<textarea id=' . $name . ' name=' . $name . '  
             rows= ' . $row . ' cols= ' . $cols . ' placeholder = ' . $placeholder . '></textarea>';
    }
}