// Nav menu open
function menu2xslideout() {
  // Pull nav menu out
    // Get rid of margin left on Nav
    document.getElementsByTagName('nav')[0].style.marginLeft = "0";
    // Add width of 215px to nav
    document.getElementsByTagName('nav')[0].style.width = "215px";
}

// Nav menu close
function menu2hidden() {
  // Push nav menu in
    // Add margin left to Nav
    document.getElementsByTagName('nav')[0].style.marginLeft = "-50px";
    // Make width of nav 0
    document.getElementsByTagName('nav')[0].style.width = "0px";
}
