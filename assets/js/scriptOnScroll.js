

function reveal() {
    var reveals = document.querySelectorAll(".left-right");
    console.log(reveals);
    for (var i = 0; i < reveals.length; i++) { 
      var windowHeight = window.innerHeight; 
      var elementTop = reveals[i].getBoundingClientRect().top; 
      var elementVisible = 90; 

       if (elementTop < windowHeight - elementVisible) {
        if(reveals.classList("translat"))
       reveals.classList.add("translate-x-0");
       reveals.classList.add("opacity-100");
      } else {
      
      }
  }
  }

  document.addEventListener("scroll", reveal);
    