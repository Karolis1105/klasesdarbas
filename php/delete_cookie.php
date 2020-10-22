<?php

$cookie_name = 'user';
setcookie(cookie_name, null, 0, '/');
echo "Cookie deleted.";

?>