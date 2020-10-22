<?php

$cookie_name = 'user';
$cookie_value = 'user';
setcookie($cookie_name, $cookie_value, time() + (60), '/')
//86400 = 1 day
echo "Cookie is saved";

?>
