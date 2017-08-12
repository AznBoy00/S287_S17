<?php
    session_start();
    $item = $_GET['item'];
    var_dump($item);
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'][] = $item;
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][] = $item;
    }
    header("Location: cart.php");
    exit();
?>
