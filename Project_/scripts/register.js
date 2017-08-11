function validateAll(fName, lName, email, phone, pass, confirmpass) {
    validFirstName(fName);
    validLastName(lName);
    validEmail(email);
    validPhone(phone);
    validPass(pass);
    validRePass(confirmpass);
    matchingPass(pass, confirmpass);
}

function validFirstName(fName) {
    if (fName==null || fName=="") {
        alert("Please Fill All Required Field");
        return false;
    }
}
function validLastName(lName) {
    if (lName==null || lName=="") {
        alert("Please Fill All Required Field");
        return false;
    }
}

function validEmail(email) {
    if(email == null || email == ""){	  
        alert("Please Fill All Required Field");
        return false;
    }
}

function validPhone(phone) {
    if(phone == null || phone == ""){
        alert("Please Fill All Required Field");
        return false;
    }
}

function validPass(pass) {
    if(pass == null || pass == ""){
        alert("Please Fill All Required Field");
        return false;
    }
    if (pass.length < 8) {
        alert("Password must contain minimum 8 characters.");
        return false;
    }
}
function validRePass(confirmpass) {
    if(confirmpass == null || confirmpass == ""){
        alert("Please Fill All Required Field");
        return false;
    }
}

function matchingPass(pass, confirmpass) {
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