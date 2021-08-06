var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value;
  document.getElementById("farmType").value = rangeSlider.value;
  var bulletPosition = rangeSlider.value / rangeSlider.max;
  if (window.screen.availWidth >= 310 & window.screen.availWidth <= 480) {
	rangeBullet.style.left = bulletPosition * 255 + "px";
  } else if (window.screen.availWidth > 500) {
  	rangeBullet.style.left = bulletPosition * 695 + "px";
  }
}