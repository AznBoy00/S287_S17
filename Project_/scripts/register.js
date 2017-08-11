function validFirstName() {
    var fName = document.forms["signup"]["firstName"].value;
    if (fName==null || fName=="") {
        alert("Please Fill All Required Field");
        return false;
    }
}
function validLastName() {
    var lName = document.forms["signup"]["lastname"].value;
    if (lName==null || lName=="") {
        alert("Please Fill All Required Field");
        return false;
    }
}

function validEmail() {
    var email = document.forms["signup"]["email"].value;
    if(email == null || email == ""){	  
        alert("Please Fill All Required Field");
        return false;
    }
}

function validPhone() {
    var phone = document.forms["signup"]["phone"].value;
    if(phone == null || phone == ""){
        alert("Please Fill All Required Field");
        return false;
    }
}

function validPass() {
    var pass = document.forms["signup"]["pass"].value;
    if(pass == null || pass == ""){
        alert("Please Fill All Required Field");
        return false;
    }
    if (pass.length < 8) {
        alert("Password must contain minimum 8 characters.");
        return false;
    }
}
function validRePass() {
    var confirmpass = document.forms["signup"]["confirm"].value;
    if(confirmpass == null || confirmpass == ""){
        alert("Please Fill All Required Field");
        return false;
    }
}

function matchingPass() {
    var confirmpass = document.forms["signup"]["confirm"].value;
    var pass = document.forms["signup"]["pass"].value;
    if(confirmpass == pass){
        alert("Passwords do not match!");
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