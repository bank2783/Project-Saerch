document.addEventListener('DOMContentLoaded', function() {
    var passwordInput = document.getElementById('password');
    var confirmpasswordInput = document.getElementById('confirmpassword');
    var registerBtn = document.getElementById('registerButton');

    confirmpasswordInput.addEventListener('input', function() {
        var password = passwordInput.value;
        var confirmpassword = confirmpasswordInput.value;

        if (confirmpassword === password) {
            // passwordInput.classList.replace('border-white','border-success');
            // confirmpasswordInput.classList.replace('border-white','border-success');
            registerBtn.removeAttribute('disabled');
        } else {
            // confirmpasswordInput.classList.replace('border-white','border-danger');
            registerBtn.setAttribute('disabled', true);
        }
    });
});
