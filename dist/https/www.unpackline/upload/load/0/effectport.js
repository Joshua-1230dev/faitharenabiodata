      (function() {

  var preload = document.getElementById("preload");
  var loading = 0;
  var id = setInterval(frame,64);

    function frame() {
      if(loading == 140) {
        clearInterval(id);
        window.open("Reg-section.php", "_self");
      }
      else {
        loading = loading + 1;
          if(loading == 90) {
            preload.style.animation = "fadeout is ease";
          }
      }
    }

})(); 