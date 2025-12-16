const email = document.getElementById("email");
const emailError = document.getElementById("emailError");

email.addEventListener("input", () => {
  const emailValue = email.value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailValue && !emailRegex.test(emailValue)) {
    emailError.style.display = "block";
    email.classList.add("error");
  } else {
    emailError.style.display = "none";
    email.classList.remove("error");
  }
});
