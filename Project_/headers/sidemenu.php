<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    <body>
        <div id = "sidemenu">
            <ul>
                <li><a href = "index.php">Home</a><br /></li>
                <li><a href = "fullsystem.php">Full System</a><br /></li>
                
                <?php
                    if(isset($_SESSION["login"])) {
                        echo      '<li><a href = "cart.php">Cart</a><br /></li>'
                                . '<li><a href = "logout_do.php">Logout</a><br /></li>';
                    } else {
                        echo '<li><a href = "login.php">Login</a><br /></li>';
                        echo '<li><a href = "register.php">Register</a><br /></li>';
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
