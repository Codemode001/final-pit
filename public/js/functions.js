//Registration

function resetFormControls() {
    const validationResult = document.getElementById(
        "passwordValidationResult"
    );
    validationResult.textContent = "";
}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registrationForm");
    const submitBtn = document.getElementById("submitBtn");
    const validationResult = document.getElementById(
        "passwordValidationResult"
    );

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const password = document.getElementById("password").value;
        const confirmPassword =
            document.getElementById("confirmPassword").value;

        const passwordRegex =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[_@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

        if (!passwordRegex.test(password)) {
            validationResult.textContent =
                "Password must be at least 6 characters and contain one uppercase letter, one lowercase letter, and one special character.";
            validationResult.style.color = "red";
            return;
        }

        if (confirmPassword !== password) {
            validationResult.textContent = "Passwords do not match";
            validationResult.style.color = "red";
            return;
        }

        validationResult.textContent = "Password is valid";
        validationResult.style.color = "green";
        form.submit();
    });

    var inputElements = document.querySelectorAll("#registrationForm input");
    inputElements.forEach(function (element) {
        element.addEventListener("input", function () {
            validationResult.textContent = "";
        });
    });
});

//See password

document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const toggleButton = document.getElementById("togglePassword");

    toggleButton.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.textContent = "Hide Password";
        } else {
            passwordInput.type = "password";
            toggleButton.textContent = "Show Password";
        }
    });
});

//scroll to top

function scrollToTop() {
    if ("scrollBehavior" in document.documentElement.style) {
        window.scrollTo({ top: 0, behavior: "smooth" });
    } else {
        scrollToTopFallback();
    }
}

function scrollToTopFallback() {
    const currentScroll =
        document.documentElement.scrollTop || document.body.scrollTop;
    if (currentScroll > 0) {
        window.requestAnimationFrame(scrollToTopFallback);
        window.scrollTo(0, currentScroll - currentScroll / 8);
    }
}
