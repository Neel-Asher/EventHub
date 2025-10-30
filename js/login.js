const modal = document.getElementById("loginModal");
const closeBtn = document.getElementById("closeModal");
const loginMessage = document.getElementById("loginMessage");

window.onload = function () {
  modal.style.display = "flex";

  // Show message from URL if any
  const params = new URLSearchParams(window.location.search);
  if (params.has('login')) {
    const msg = params.get('msg');
    if (msg) loginMessage.textContent = msg;
  }
};

closeBtn.onclick = function () {
  window.location.href = "index.html";
};

window.onclick = function (event) {
  if (event.target === modal) {
    window.location.href = "index.html";
  }
};
