<!DOCTYPE html>
<html>
<style>
    input[type = text], select{
        width: 50%;
        padding: 5px 8px;
        margin: 10px 0;
        border: 5px solid #ccc;
        border-radius: 10px;
    }
    input[type = password], select{
        width: 50%;
        padding: 5px 8px;
        margin: 10px 0;
        border: 5px solid #ccc;
        border-radius: 10px;
    }
    .subbutton{
        width: 25%;
        cursor: pointer;
    }
    .error {color: #FF0000;}
</style>
<head>
    <meta charset="utf-8" />
    <title>MtlTechGuys - Webstore</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body class = "centered">
    <div id = "banner">
        <?php
            include 'topmenu.php';
        ?>
    </div>
    <div id = "sidemenu">
        <?php
            include 'sidemenu.html';
        ?>
    </div>
    <div id = "index">
        <form name = "Login" method="POST">
            <label><strong>Email</strong></label>
            <input type="text" placeholder="Enter Email" name="email"><br>
            <label><strong>Password</strong></label>
            <input type="password" placeholder="Enter Password" name="password"><br>
            <button type="submit" class="subbutton">Login</button>
        </form>
    </div>
    <div id = "footer">
        <img src ="footer.jpg" width="1080" height="100"/>
        Copyright (c) 2017 MtlTechGuys All rights reserved.
        <a href = "aboutus.html">About Us</a>
        <a href = "contact.html">Contact</a>
    </div>
</body>
</html>