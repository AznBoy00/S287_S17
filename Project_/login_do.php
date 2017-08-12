<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $file = file("db/members.txt");
    $success = false;
    
    foreach($file as $line) {
        $user_details = explode('|', $line);
        if ($user_details[2] == $email && $user_details[4] == $pw) {
            $success = true;
            $email = $user_details[2];
            $pw = $user_details[4];
            break;
        }
    }

    if ($success) {
        $_SESSION["login"] = $email;
        echo "<br> Hi $email you have been logged in. <br>";
    } else {
        echo "<br> You have entered the wrong username or password. Please try again. <br>";
    }
}
?>