const modal = document.getElementById("registerModal");
const closeBtn = document.getElementById("closeBtn");

closeBtn.onclick = function () {
  window.location.href = "index.html"; 
};

window.onclick = function(event) {
  if (event.target === modal) {
    window.location.href = "index.html";
  }
};
