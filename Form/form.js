function validateForm() {

    const name = document.getElementById('name').value;
    const regNum = document.getElementById('registerNumber').value;
    const password = document.getElementById('password').value;
    const confirmPass = document.getElementById('confirmPassword').value;
    const dob = document.getElementById('dob').value;
    const age = document.getElementById('age').value;
    const prog = document.getElementById('programme').value;
    const year = document.getElementById('year').value;
    const sem = document.getElementById('semester').value;
    const email = document.getElementById('email').value;
    const areaOfInterest = document.getElementById('areaOfInterest').value;
    const cgpa = document.getElementById('cgpa').value;
    const gender = document.getElementsByName('gender')

    // Perform validation checks
    if (name.trim() === '' ||
        regNum.trim() === '' ||
        password.trim() === '' ||
        confirmPass.trim() === '' ||
        dob.trim() === '' ||
        age.trim === '' ||
        prog === '' ||
        year.trim() === '' ||
        sem.trim() === '' ||
        email.trim() === '' ||
        areaOfInterest.trim() === '' ||
        cgpa.trim() === '') {
        alert('Please fill out all fields.');
        return false;
    }

    if (password !== confirmPass) {
        alert('Passwords do not match.');
        confirmPass.focus();
        return false;
    }

    // Validate Date of Birth format (dd/mm/yyyy)
    const dobPattern = /^\d{2}\/\d{2}\/\d{4}$/;
    if (!dob.match(dobPattern)) {
        alert('Date of Birth should be in dd/mm/yyyy format.');
        dob.focus()
        return false;
    }

    // Validate email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailPattern)) {
        alert('Invalid email address.');
        email.focus();
        return false;
    }


    if (!validgender(gender)) {
        alert('Please select a gender(Male/Female).');
        return false;
    }

    if(!programValid(prog)){
        alert('Please select a Program.');
        prog.focus()
        return false;
    }

    alert("Form Submitted successfully")
    return true; // Form submission 
}

// validate radio buttons
function validgender(gender) {
    var isChecked = false;
    for (var i = 0; i < gender.length; i++) {
        if (gender[i].checked == true) {
            isChecked = true; // found one element checked 
            break;
        }
    }
    return isChecked;
}


// validate drop down menu
function programValid(prog) {
    if (prog == "Default") { 
        return false;
    }  
    else {
        return true;
    }
}

