const paralax = document.getElementById("paralax");
window.addEventListener("scroll", () => {
  let offset = window.pageYOffset;
  paralax.style.backgroundPositionY = -offset * 0.2 + "px";
});