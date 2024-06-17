function toggleMenuMobile() {
  var itemHambuger = document.querySelector(".custom-menu-mobile .button");
  var menuMobile = document.querySelector(".menu-mobile");
  var menuOverlay = document.querySelector(".overlay-menu-mobile");
  itemHambuger.addEventListener("click", function (e) {
    e.preventDefault();
    menuMobile.classList.add("is-open");
    menuOverlay.classList.add("is-open");
  });
  menuOverlay.addEventListener("click", function (e) {
    e.preventDefault();
    menuMobile.classList.remove("is-open");
    menuOverlay.classList.remove("is-open");
  });
}
toggleMenuMobile();
