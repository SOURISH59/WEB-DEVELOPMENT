// Form validation for Registration and Login
function validateForm(formId) {
    const form = document.getElementById(formId);
    const username = form.querySelector('input[name="username"]');
    const password = form.querySelector('input[name="password"]');
    const confirmPassword = form.querySelector('input[name="confirm-password"]');

    if (username.value === '' || password.value === '') {
        alert('Please fill out all required fields.');
        return false;
    }

    // If it's a registration form, ensure password matches confirm password
    if (confirmPassword && password.value !== confirmPassword.value) {
        alert('Passwords do not match!');
        return false;
    }

    return true;
}

// Password strength checker
function checkPasswordStrength(passwordInputId, strengthIndicatorId) {
    const password = document.getElementById(passwordInputId).value;
    const strengthIndicator = document.getElementById(strengthIndicatorId);
    let strength = 'Weak';

    if (password.length >= 8 && /[A-Z]/.test(password) && /\d/.test(password) && /[!@#$%^&*]/.test(password)) {
        strength = 'Strong';
    } else if (password.length >= 6) {
        strength = 'Medium';
    }

    strengthIndicator.textContent = 'Password strength: ' + strength;
    strengthIndicator.style.color = strength === 'Strong' ? 'green' : (strength === 'Medium' ? 'orange' : 'red');
}

// Submit feedback confirmation
function submitFeedback() {
    alert('Thank you for your feedback!');
    return true; // You can enhance this with further validation if needed
}

// Event listeners
document.addEventListener('DOMContentLoaded', function () {
    const feedbackForm = document.querySelector('.feedback-section form');
    if (feedbackForm) {
        feedbackForm.addEventListener('submit', submitFeedback);
    }
});
