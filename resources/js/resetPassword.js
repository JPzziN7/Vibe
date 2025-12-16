const newPassword = document.getElementById("newPassword");
const confirmPassword = document.getElementById("confirmPassword");
const passwordError = document.getElementById("passwordError");
const confirmError = document.getElementById("confirmError");

// Validação da senha mínima
newPassword.addEventListener("input", () => {
  if (newPassword.value.length < 8) {
    passwordError.style.display = "block";
    newPassword.classList.add("error");
  } else {
    passwordError.style.display = "none";
    newPassword.classList.remove("error");
  }
});

// Validação de senha igual à confirmação
confirmPassword.addEventListener("input", () => {
  if (confirmPassword.value !== newPassword.value) {
    confirmError.style.display = "block";
    confirmPassword.classList.add("error");
  } else {
    confirmError.style.display = "none";
    confirmPassword.classList.remove("error");
  }
});
