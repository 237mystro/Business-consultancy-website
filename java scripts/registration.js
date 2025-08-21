function togglepassword() {
    // Toggle the type of the password input field
    let password = document.getElementById('password');
    let toggleIcon = document.querySelector('.tougle');
    if (password.type === "password") {
        password.type = 'text';
        toggleIcon.textContent = 'Hide Password'; // Change icon or text to indicate visibility
    } else {
        password.type = 'password';
        toggleIcon.textContent = 'Show Password'; // Change icon or text to indicate hidden
    }
}


