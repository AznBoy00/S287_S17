<?php
    session_start();
?>
<!DOCTYPE html>
<html>
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
        <div id = "fixed" class = "intel">
            <img src="img/processor.jpg" width="130" height="130"/><br>
            <strong>Intel Core i7 7920HQ</strong><br><br>
            Fastest Intel has to offer in processor technology. Clocks in at a speed of up to 4.1GHz. Perfect for multi-tasking, working, and gaming.<br><br>
            <strong>Price: $378.99</strong><br><br><br>
            <button type="submit" value="Submit">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
        <img src ="img/mouse.png" width = "150" height = "130"/><br>
            <strong>Razer Naga Chroma</strong><br><br>
            Total of 19 buttons, allowing you to access even more abilities, macros, making sure you hit the right button at the right time, without compromise.<br><br>
            <strong> Price: $189.99</strong><br><br><br>
            <button type="submit" value="Submit">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
            <img src ="img/alien.jpeg" width = "150" height = "130"/><br>
            <strong>Alienware 17</strong><br><br>
                One of a kind gaming techonolgy, Alienware has been the leading brand in laptop gaming, ensuring you are equipped with the best hardware, including VR!<br><br>
                <strong> Price: $1,899.99</strong><br><br><br>
                <button type="submit" value="Submit">Add to Cart</button>
        </div>
        <div  id = "fixed" class = "razer">
        <img src ="img/corsair.png" width = "150" height = "130"/><br>
        <strong>Corsair K95 RGB</strong><br><br>
            One of a kind gaming techonolgy, Alienware has been the leading brand in laptop gaming, ensuring you are equipped with the best hardware, including VR!<br><br>
            <strong> Price: $225.99</strong><br><br><br>
            <button type="submit" value="Submit">Add to Cart</button>
        </div>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>
