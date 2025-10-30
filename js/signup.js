const modal = document.getElementById("signupModal");
const closeBtn = document.getElementById("closeModal");

window.onload = function () {
  modal.style.display = "flex";
};

closeBtn.onclick = function () {
  window.location.href = "index.html";
};

window.onclick = function (event) {
  if (event.target === modal) {
    window.location.href = "index.html";
  }
};
