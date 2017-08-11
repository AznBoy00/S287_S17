<?php
$firstNameErr = $lastNameErr = $noEmail = $noPhone = $noPass = $noConfirmPass = "";
$firstName = $lastName = $email = $phone = $pass = $confirmPass = "";

if($_SERVER["REQUEST METHOD"] == "POST"){
    if (empty($_POST['firstName'])) {
        $firstNameErr = "First name is required";
    } else {
        $firstName = test_input($_POST['firstName']);
    }
    if(empty($_POST['lastName'])){
        $lastNameErr = "Last name is required";
    } else {
        $lastName = test_input($_POST['lastName']);
    }
    if(empty($_POST['email'])){
        $noEmail = "Email is required";
    } else { 
        $email = test_input($_POST['email']);
    }
    if(empty($_POST['phone'])){
        $noPhone = "Phone number is required";
    } else {
        $phone = test_input($_POST['phone']);
    }
    if(empty($_POST['pw'])){
        $noPass = "Password is required";
    } else {
        $pass = test_input($_POST['pw']);
    }
    if(empty($_POST['confirmpw'])){
        $noConfirmPass = "You must confirm your password";
    } else {
        $confirmPass = test_input($_POST['confirmpw']);
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pw'];
    $confirmPass = $_POST['confirmpw'];

    $fp = fopen("members.txt", "b");
    $savedString = $firstName . ",". $lastName . "," . $email . "," . $phone . "," . $pass. "n";
    fwrite($fp, $savedString);
    fclose($fp);
    echo "Your data has been saved!!";
}
?>