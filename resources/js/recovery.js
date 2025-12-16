const recoveryEmail = document.getElementById("recoveryEmail");
const emailError = document.getElementById("emailError");

recoveryEmail.addEventListener("input", () => {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!emailPattern.test(recoveryEmail.value)) {
    emailError.style.display = "block";
    recoveryEmail.classList.add("error");
  } else {
    emailError.style.display = "none";
    recoveryEmail.classList.remove("error");
  }
});
