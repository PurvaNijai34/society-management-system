// script.js
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("adminModal");
    const btn = document.getElementById("adminLoginBtn");
    const span = document.getElementsByClassName("close-popup")[0];

    // Open the modal when the button is clicked
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Close the modal when the 'x' is clicked
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal when clicking outside of the modal content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Optional: handle the form submission
    // const form = document.getElementById("adminLoginForm");
    // form.onsubmit = function(e) {
    //     e.preventDefault();
    //     // Add login logic here


    //     alert("Logged in!");
    //     modal.style.display = "none"; // Close the modal after login
    // }
});
