
const password = document.getElementById("password");
const passwordConfirm = document.getElementById("password_confirmation");
const passwordError = document.getElementById("passwordError");
const confirmError = document.getElementById("confirmError");
const email = document.getElementById("email");
const emailError = document.getElementById("emailError");

//validação email
email.addEventListener("input", () => {
  const emailValue = email.value;
  // Regex simples para validar email
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailValue && !emailRegex.test(emailValue)) {
    emailError.style.display = "block";
    email.classList.add("error");
  } else {
    emailError.style.display = "none";
    email.classList.remove("error");
  }
});
// Validação da senha mínima
password.addEventListener("input", () => {
  if (password.value && password.value.length < 8) { // só verifica se digitou algo
    passwordError.style.display = "block";
    password.classList.add("error");
  } else {
    passwordError.style.display = "none";
    password.classList.remove("error");
  }
});

// Validação de senha igual à confirmação
passwordConfirm.addEventListener("input", () => {
  if (passwordConfirm.value && passwordConfirm.value !== password.value) { // só ativa se digitou algo
    confirmError.style.display = "block";
    passwordConfirm.classList.add("error");
  } else {
    confirmError.style.display = "none";
    passwordConfirm.classList.remove("error");
  }
});