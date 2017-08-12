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
        <div id = "fixed" class = "intel">
            <img src="img/entry.jpg" width="130" height="130"/><br>
            <strong>Entra I</strong><br><br>
            Perfect for office work with the latest AMD Ryzen 3 fully equipped for office work.<br><br>
            <strong>Price: $499.99</strong><br><br><br>
            <button type="submit" value="Entra I" name = "item" method = "GET" onclick="window.location='cart_do.php?item=Entra|499.99';">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
        <img src ="img/home.jpg" width = "150" height = "130"/><br>
            <strong>Home Station I</strong><br><br>
            Perfect for media streaming at home at high resolutions.<br><br>
            <strong> Price: $599.99</strong><br><br><br>
            <button type="submit" value="Home Station I" name = "item" method = "GET" onclick="window.location='cart_do.php?item=Home+Station|599.99';">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
            <img src ="img/delta.jpg" width = "150" height = "130"/><br>
            <strong>Impact Gaming I</strong><br><br>
                Perfect combination for decent settings on AAA titles.<br><br>
                <strong> Price: $1,299.99</strong><br><br><br>
                <button type="submit" value="Impact Gaming I" name = "item" method = "GET" onclick="window.location='cart_do.php?item=Impact+Gaming|1299.99';">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
        <img src ="img/ultima.jpg" width = "150" height = "130"/><br>
        <strong>Impact Hydro I</strong><br><br>
            The best of the best, perfect for gaming at 1440p 60fps. One of the highest end desktop platform you can find on the market.<br><br>
            <strong> Price: $1,999.99</strong><br><br><br>
            <button type="submit" value="Impact Hydro I" name = "item" method = "GET" onclick="window.location='cart_do.php?item=Impract+Hydro|1999.99';">Add to Cart</button>
        </div>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>