function reveal() {
    var reveals = document.querySelectorAll(".reveal")
  
  

    const reveals = document.querySelectorAll(".bot-top");
    for (var i = 0; i < reveals.length; i++) { 
      var windowHeight = window.innerHeight; 
      var elementTop = reveals[i].getBoundingClientRect().top; 
      var elementVisible = 90; 

       if (elementTop < windowHeight - elementVisible) { 
       title.classList.add("translate-x-0")
       title.classList.add("opacity-100")
      } else {
        title.classList.remove("translate-x-0")
        title.classList.remove("opacity-100")
      
      }
  }
  }

  onload = (reveal);
