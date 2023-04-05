// Get the profile button, login modal, and register modal
var profileBtn = document.getElementById("profile-btn");
var loginModal = document.getElementById("login-modal");
var registerModal = document.getElementById("register-modal");

// When the profile button is clicked, show the login modal
profileBtn.onclick = function() {
  loginModal.style.display = "block";
}

// When the user clicks on the close button or anywhere outside the modal, close the modal
document.addEventListener('click', function(event) {
  if (event.target.closest('.close') || event.target == loginModal || event.target == registerModal) {
    loginModal.style.display = "none";
    registerModal.style.display = "none";
  }
});

// When the user clicks on the register button in the login modal, show the register modal
var registerBtn = document.getElementById("register-btn");
registerBtn.onclick = function() {
  loginModal.style.display = "none";
  registerModal.style.display = "block";
}

