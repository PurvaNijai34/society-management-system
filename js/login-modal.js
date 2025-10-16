// Get modal element
var modal = document.getElementById("myModal");

// Get button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// Get the Sign Up and Login forms
var loginForm = document.getElementById("loginForm");
var signUpForm = document.getElementById("signUpForm");

// Get the link to open Sign Up form
var openSignUp = document.getElementById("openSignUp");

// Get the link to go back to Login form
var backToLogin = document.getElementById("backToLogin");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.classList.add("show");
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.classList.remove("show");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.remove("show");
        loginForm.style.display = "none";
    }
}

// Show Sign Up form, hide Login form
openSignUp.onclick = function(event) {
    event.preventDefault();
    loginForm.style.display = "none";
    signUpForm.style.display = "block";
}

// Go back to Login form, hide Sign Up form
backToLogin.onclick = function(event) {
    event.preventDefault();
    signUpForm.style.display = "none";
    loginForm.style.display = "block";
}
