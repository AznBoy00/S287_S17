function validateAll() {
    validFirstName();
    validLastName();
    validEmail();
    validPhone();
    validPass();
    validRePass();
    matchingPass();
}

function validFirstName() {
    var fName = document.forms["signup"]["firstName"].value;
    if (fName==null || fName=="") {
        alert("First name is required");
        return false;
    }
}
function validLastName() {
    var lName = document.forms["signup"]["lastname"].value;
    if (lName==null || lName=="") {
        alert("Last name is required");
        return false;
    }
}

function validEmail() {
    var email = document.forms["signup"]["email"].value;
    if(email == null || email == ""){	  
        alert("Email is required");
        return false;
    }
}

function validPhone() {
    var phone = document.forms["signup"]["phone"].value;
    if(phone == null || phone == ""){
        alert("Phone number is required");
        return false;
    }
}

function validPass() {
    var pass = document.forms["signup"]["pw"].value;
    if(pass == null || pass == ""){
        alert("Password is required");
        return false;
    }
    if (pass.length < 8) {
        alert("Passwords has to contain at least 8 characters.");
        return false;
    }
}
function validRePass() {
    var confirmpass = document.forms["signup"]["confirmpw"].value;
    if(confirmpass == null || confirmpass == ""){
        alert("You must confirm your password.");
        return false;
    }
}

function matchingPass() {
    var confirmpass = document.forms["signup"]["confirm"].value;
    var pass = document.forms["signup"]["pass"].value;
    if(confirmpass == pass){
        alert("Passwords do not match.");
        return false;
    }
}

function validateInput(input) {
    if(input == null || input == ""){
        alert("Please Fill All Required Field");
        return false;
    }
    return true;
}