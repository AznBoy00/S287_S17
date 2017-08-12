<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include 'headers/header.php';
    ?>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
</head>
<body class = "centered">
    <?php
        include 'headers/topmenu.php';
        include 'headers/sidemenu.php';
    ?>
    <div id = "index">
        <h2>Registration</h2>
        <form name = "login" method="POST" onsubmit="index.php">
            <label><strong>Email</strong></label>
            <input type = "text" placeholder = "Email" name = "email"><br>
            <label><strong>Password</strong></label>
            <input type = "password" placeholder = "Password" name = "pw"><br>
            <button type = "submit" class = "subbutton" value = "login" name = "login">Login</button>
        </form>
        <?php
            include 'login_do.php';
        ?>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>