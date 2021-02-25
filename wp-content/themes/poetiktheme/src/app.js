console.log("this is coming from mix");

//READ MORE LINK

const readMore = document.querySelector(".about__read-more");
const modal = document.querySelector(".modal");
const body = document.querySelectorAll("section");
const footer = document.querySelector("footer");
const x = document.querySelector(".modal__close-btn");
const heading = document.querySelector(".about__title");

readMore.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal"){
            section.style.display = "none";
        }
    }
    footer.style.display = "none";
    modal.style.visibility= "visible";
    modal.scrollIntoView();
})

x.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal"){
            section.style.display = "block";
        }
    }
    footer.style.display = "block";
    modal.style.visibility= "hidden";
    heading.scrollIntoView();
})



