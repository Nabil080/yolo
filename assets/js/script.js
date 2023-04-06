function onLoad(){

const title1 = document.querySelectorAll(".bot-top");
title1.forEach(title=>{
    title.classList.add("translate-y-0")
    title.classList.add("opacity-100")
});
const title2 = document.querySelectorAll(".left-right");
title2.forEach(title=>{
title.classList.add("translate-x-0")
title.classList.add("opacity-100")
});
}
window.onLoad = setTimeout(onLoad, 300);

function collapseOne(){
    const collapse = document.querySelector("#one");
    collapse.classList.toggle("hidden")
}
function collapseTwo(){
    const collapse = document.querySelector("#two");
    collapse.classList.toggle("hidden")
}

