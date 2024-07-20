// Function untuk Hide & Unhide button pada form password 
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password');
    var passwordIcon = document.getElementById('togglePasswordIcon');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.classList.remove('fa-eye');
        passwordIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        passwordIcon.classList.remove('fa-eye-slash');
        passwordIcon.classList.add('fa-eye');
    }
}
// Function End

// Function reCHAPCA
function onSubmit(token) {
  document.getElementById("demo-form").submit();
}
// End

// Function Responsive Dashboard
// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
// Function End

// Function Avatar Profil

// Function End

// Function Verifikasi Email
function sendVerification() {
  // Ambil email dari input form
  const email = document.getElementById('email').value;

  if (email) {
      // Kirim request AJAX ke server
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'user/panel_user/send_verification.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      // Tangani response dari server
      xhr.onload = function() {
          if (xhr.status === 200) {
              alert('Email verifikasi telah dikirim! Silakan cek email Anda.');
          } else {
              alert('Gagal mengirim email verifikasi.');
          }
      };

      // Kirim data email ke server
      xhr.send('email=' + encodeURIComponent(email));
  } else {
      alert('Silakan masukkan email terlebih dahulu.');
  }
}
// Function End