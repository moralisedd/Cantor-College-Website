// Image slider JavaScript on Business + All Facilities Pages
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slider");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  if (myIndex >= x.length) { myIndex = 0; }
  x[myIndex].style.display = "block";
  myIndex++;
  setTimeout(carousel, 2500);
}
