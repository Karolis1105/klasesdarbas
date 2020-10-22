<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="enter your username"
        <input type="password" name="password" placeholder="enter your password"
    </form>

<?php
    session_start();
    if(isset($_GET['logged'])  && $_GET['logged'] === 'false') {
        echo 'nepavyko prisijungti';
    }
?>
</body>
