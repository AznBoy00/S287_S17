<!DOCTYPE html>
<html>
<head>
    <script src="registration.js"></script>
    <meta charset="utf-8" />
    <title>MtlTechGuys - Webstore</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body class = "centered">
    <?php
        include 'headers/topmenu.php';
        include 'headers/sidemenu.php';
        /**<div id = "index">
        <h2>Registration</h2>
        <form name = "signup" method="POST" onsubmit ="" action="?register_do.php">		
            <span class="error">* <?php echo $firstNameErr;?></span>
            <label><strong>First Name</strong></label>
            <input type="text" placeholder="Enter First Name" name="first"><br>
            <span class="error">* <?php echo $lastNameErr;?></span>
            <label><strong>Last Name</strong></label>
            <input type="text" placeholder="Enter Last Name" name="last"><br>
            <span class="error">* <?php echo $noEmail;?></span>
            <label><strong>Email Address</strong></label>
            <input type="text" placeholder="Enter Email" name="email"><br>
            <span class="error">* <?php echo $noPhone;?></span>
            <label><strong>Phone Number</strong></label>
            <input type="text" placeholder="Enter ###" name="phone" ><br>
            <span class="error">* <?php echo $noPass;?></span>
            <label><strong>Password</strong></label>
            <input type="password" placeholder="Enter Password" name="psw"><br>
            <span class="error">* <?php echo $noConfirmPass;?></span> 
            <label><strong>Repeat Password</strong></label>
            <input type="password" placeholder="Enter Password" name="psw"><br>
            <button type="submit" class="subbutton">Sign Up</button>
        </form>
    </div>**/
    ?>
    
    <div id = "index">
        <h2>Registration</h2>
        <form name = "signup" method="POST" onsubmit ="" action="?register_do.php">
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
            <button type="submit" class="subbutton" action="validateAll();">Sign Up</button>
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
