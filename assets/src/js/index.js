console.log("Troublemaker was here and Akatsuki too");

const btnTalkOnWhatsapp = document.querySelector("#btn-welcome-zap-talking");
const btnTogglePassword = document.getElementById('welcome-btn-toggle-password');
const welcomePasswordField = document.getElementById('welcome-password-input');

document.addEventListener('scroll', (evt) =>{
    evt.preventDefault();

    console.log('This is strange: ' + this.screenTop);
})


btnTalkOnWhatsapp.addEventListener("click", () => {
  alert(
    "At this moment you have successfully joined the channel and will be notified."
  );
});

btnTogglePassword.onclick = (evt) => {
  evt.preventDefault();

  if (evt.target.className.includes('fa-eye-slash')) {
    evt.target.classList.add('fa-eye');
    evt.target.classList.remove('fa-eye-slash');
    welcomePasswordField.type="text";
  } else {
    evt.target.classList.add('fa-eye-slash');
    evt.target.classList.remove('fa-eye');
    welcomePasswordField.type="password";
  } 

  // console.log(evt.target.className.includes('fa-eye-slash'));
}