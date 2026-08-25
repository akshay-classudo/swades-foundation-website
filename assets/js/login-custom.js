function validateForm() {
  let email = document.getElementById("email").value.trim();
  let emailError = document.getElementById("emailError");

  /*if (email === "") {
    emailError.style.display = "block"; // Show error
  } else {
    emailError.style.display = "none";  // Hide error
    alert("Form submitted successfully!"); // Replace with actual submit logic
  }*/
}


// Toggle function with dynamic target
  function togglePassword(fieldId, iconId) {
    const passwordInput = document.getElementById(fieldId);
    const toggleIcon = document.getElementById(iconId);
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    }
  }