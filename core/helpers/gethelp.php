<?php

    function display_errors ($error) {
    $display = '<ul class="bg-danger">';
    foreach($errors in $error) {
        $display .= '<li class="text-danger>'. $error .'</li>';
    }
    $display .='</ul>';
    return $display;
    }

    function sanitize($dirty){
        return htmlentities($dirty, ENT_QOUTES,"UTF-8");
    }

    function money($number){
        return '$'.number_format($number,2)
    }
?>