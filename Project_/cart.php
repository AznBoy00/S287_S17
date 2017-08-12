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
        <?php
            if (isset($_SESSION['cart'])) {
                $total = 0;
                foreach($_SESSION['cart'] as $line) {
                    $detail = explode('|', $line);
                    $total += $detail[1];
                    echo $detail[0] . ' | ' . $detail[1] . '<br>';
                }
                echo '<br><br>Total: $' . $total . '<br><br><br><br><br>';
            }
        ?>
        <button>Checkout</button>
    </div>
</body>
<footer>
    <?php
        include 'headers/footer.php';
    ?>
</footer>
</html>