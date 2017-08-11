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
    <?php
        include 'headers/header.php';
    ?>
</head>
<body class = "centered">
    <?php
        include 'headers/topmenu.php';
        include 'headers/sidemenu.php';
    ?>
    <div id = "index">
        <form name = "Login" method="POST">
            <label><strong>Email</strong></label>
            <input type="text" placeholder="Enter Email" name="email"><br>
            <label><strong>Password</strong></label>
            <input type="password" placeholder="Enter Password" name="password"><br>
            <button type="submit" class="subbutton">Login</button>
        </form>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>