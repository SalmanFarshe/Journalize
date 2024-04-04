// responsive menu
function toggleMenu() {
  var menu_ul = document.querySelector(".menu_ul");
  var fa_bars = document.querySelector(".fa-bars");
  var fa_times = document.querySelector(".fa-times");
  menu_ul.classList.toggle("toggleMenu");
  if (fa_bars) {
    fa_bars.classList.replace("fa-bars", "fa-times");
  } else {
    fa_times.classList.replace("fa-times", "fa-bars");
  }
}