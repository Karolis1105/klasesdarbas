<html>
<body>

<?php

if(!isset($_COOKIE['user'])) {
    echo 'Cookie named "user" is not created!';
}   else {
    echo 'Cookie "user" is created! <br>';
    echo 'Its value is: ' . $_COOKIE['user'];
    echo '<a href="delete_cookie.php">Delete cookie</a>'
}
?>

</body>
</html>