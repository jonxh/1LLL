var menuStatus = true;

function openclose() {
  if (menuStatus == true) {
    document.getElementById("headerLinks").style = "height: 40px;transition: 200ms;";
    menuStatus = false;
  } else if (menuStatus == false) {
    document.getElementById("headerLinks").style = "height: 0px;transition: 200ms;";
    menuStatus = true;
  }
}
