<?php
session_start();
if (isset($_POST['username'], $_POST['password']) &&
    $_POST['password'] === 'secret'
) {
    $_SESSION['ar prisijunges'] = true;
    header('Location : admin.php');
}else {
    atgal();
}
function atgal(): void
{
    header("Location: inmdex.php?logged=false");
}