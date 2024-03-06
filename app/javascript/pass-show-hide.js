document.addEventListener("DOMContentLoaded", function () {
  const pswrdField = document.querySelector(".inputContainer input[type='password']");
  const toggleIcon = document.querySelector(".inputContainer ion-icon[name='eye-outline']");

  toggleIcon.addEventListener('click', function () {
      if (pswrdField.type === "password") {
          pswrdField.type = "text";
          toggleIcon.classList.add("active");
          console.log("Password visible");
      } else {
          pswrdField.type = "password";
          toggleIcon.classList.remove("active");
          console.log("Password hidden");
      }
  });
});
