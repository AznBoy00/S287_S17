<?php
$firstNameErr = "";
$lastNameErr = "";
$noEmail = "";
$noPhone = "";
$noPass = "";
$noConfirmPass = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pw'];
    $confirmPass = $_POST['confirmpw'];

    if (empty($_POST['firstName'])) {
        $firstNameErr = "First name is required";
    }
    if(empty($_POST['lastName'])){
        $lastNameErr = "Last name is required";
    }
    if(empty($_POST['email'])){
        $noEmail = "Email is required";
    }
    if(empty($_POST['phone'])){
        $noPhone = "Phone number is required";
    }
    if(empty($_POST['pw'])){
        $noPass = "Password is required";
    }
    if(empty($_POST['confirmpw'])){
        $noConfirmPass = "You must confirm your password.";
    }
    if(empty($_POST['pw']) != empty($_POST['confirmpw'])) {
        $noPass = "Passwords do not match.";
    }
    if(strlen($_POST['pw']) < 8) {
        $noPass = "Passwords has to contain at least 8 characters.";
    }
    echo "<br><br>";
    if ($firstNameErr != "" || $lastNameErr != "" || $noEmail != "" || $noPhone != "" || $noPass != "" || $noConfirmPass != "") {
        
        if ($firstNameErr != "") {
            echo $firstNameErr . "<br>";
        }
        if ($lastNameErr != "") {
            echo $lastNameErr . "<br>";
        }
        if ($noEmail != "") {
            echo $noEmail . "<br>";
        }
        if ($noPhone != "") {
            echo $noPhone . "<br>";
        }
        if ($noPass != "") {
            echo $noPass . "<br>";
        }
        if ($noConfirmPass != "") {
            echo $noConfirmPass . "/n";
        }
    } else {
        $file = fopen("db/members.txt", "w");
        $savedString = $firstName . "|". $lastName . "|" . $email . "|" . $phone . "|" . $pass . "|\n";
        fwrite($file, $savedString);
        fclose($file);
        echo "Account created!";
    }
    
}
?>