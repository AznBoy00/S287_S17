<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="scripts/register.js"></script>
    <meta charset="utf-8" />
    <title>MtlTechGuys - Webstore</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body class = "centered">
    <?php
        include 'headers/topmenu.php';
        include 'headers/sidemenu.php';
    ?>
    <div id = "index">
        <h2>Registration</h2>
        <form name = "signup" method="POST" onsubmit ="validFirstName(); validLastName(); validEmail(); validPhone(); validPass(); validRePass(); matchingPass();" action="">
            <label><strong>First Name</strong></label>
            <input type="text" placeholder="Enter First Name" name="firstName"><br>
            <label><strong>Last Name</strong></label>
            <input type="text" placeholder="Enter Last Name" name="lastName"><br>
            <label><strong>Email Address</strong></label>
            <input type="text" placeholder="Enter Email" name="email"><br>
            <label><strong>Phone Number</strong></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" ><br>
            <label><strong>Password</strong></label>
            <input type="password" placeholder="Enter Password" name="pw"><br>
            <label><strong>Repeat Password</strong></label>
            <input type="password" placeholder="Enter Password" name="confirmpw"><br>
            <button type="submit" class="subbutton" action="">Sign Up</button>
        </form>
        <?php
            include 'register_do.php';
        ?>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>
