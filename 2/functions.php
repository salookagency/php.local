<?php
function is_user_logge_in()
{
    return true;
}


function select_bg($color_name)
{
    $result = "";
    switch ($color_name) {
        case 'blue':
            $result = '#00c';
            break;
        case 'red':
            $result = '#c00';
            break;
        case 'green':
            $result = '#0c0';
            break;

    }
    return $result;
}

function get_users()
{
    return array(
        array('id' => 1, 'name' => 'ali', 'email' => 'ali@gmail.com'),
        array('id' => 2, 'name' => 'ahmad', 'email' => 'ahmad@gmail.com'),
        array('id' => 3, 'name' => 'sam', 'email' => 'sam@gmail.com'),
        array('id' => 4, 'name' => 'nargol', 'email' => 'nargol@gmail.com'),
        array('id' => 5, 'name' => 'ema', 'email' => 'ema@gmail.com'),
        array('id' => 6, 'name' => 'jon', 'email' => 'jon@gmail.com'),
        array('id' => 7, 'name' => 'sara', 'email' => 'sara@gmail.com'),

    );
}