// ======================start sticky===============================
let scrollButton = document.querySelector("#logo");
let body = document.querySelector("html,body")


window.addEventListener("scroll", () => {
    
    if (body.scrollTop >= 300){
        scrollButton.style.display="block";
        scrollButton.addEventListener("click", () => {
            window.scrollTo(0,0);
        })
    }else{
        scrollButton.style.display="none";

    }
})     


let stickyNav = document.querySelector(".sticky-navbar");

window.addEventListener("scroll", () => {

    if (body.scrollTop >= 50) {
        stickyNav.style.display = "block";

        if (stickyNav.classList.contains("animate__fadeOutUp")) {
            stickyNav.classList.remove("animate__animated", "animate__fadeOutUp")
        }

        stickyNav.classList.add("animate__animated", "animate__fadeInDown")

    } else {
        stickyNav.style.display = "block";

        if (stickyNav.classList.contains("animate__fadeInDown")) {
            stickyNav.classList.remove("animate__animated", "animate__fadeInDown")

        }

        stickyNav.classList.add("animate__animated", "animate__fadeOutUp")
    }


    })
  
    // ======================start sticky===============================
    // ======================start sidebar===============================
   
 


const hamburer = document.querySelector(".hamburger");
const navList = document.querySelector(".nav-list");

if (hamburer) {
  hamburer.addEventListener("click", () => {
    navList.classList.toggle("open");
  });
}

