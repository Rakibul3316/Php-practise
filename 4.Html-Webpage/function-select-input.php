<?php

function displayOption($options, $selectedValues) {

    foreach($options as $option) {
        $selected = '';

        if(in_array(strtolower($option), $selectedValues)) {
            $selected = 'selected';
        }
        printf("<option value='%s' %s>%s</option> \n",strtolower($option),$selected,ucwords($option));
    }
}