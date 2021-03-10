// import Splide from '@splidejs/splide';


// (function (d) {
//     var w = d.documentElement.offsetWidth,
//         t = d.createTreeWalker(d.body, NodeFilter.SHOW_ELEMENT),
//         b;
//     while (t.nextNode()) {
//         b = t.currentNode.getBoundingClientRect();
//         if (b.right > w || b.left < 0) {
//             t.currentNode.style.setProperty('outline', '1px dotted red', 'important');
//             console.log(t.currentNode);
//         }
//     };
// }(document));


// new Splide( '#music-slider',  {
//     'cover'      : true,
//     'heightRatio': 0.5,
//     perPage: 3,
//     gap: 6,
//     breakpoints: {
//         1000: {
//             perPage: 1
//         }
//     }
// }).mount();

// new Splide( '#photos-slider',  {
//     'cover'      : true,
//     'heightRatio': 0.5,
// }).mount();

// new Splide( '#shop-slider',  {
//     'cover'      : true,
//     'heightRatio': 0.5,
// }).mount();

console.log("this is coming from mix");

//READ MORE LINK

const readMore = document.querySelector(".link_about");
const moreDates = document.querySelector(".link_tour");
const modal = document.querySelector(".modal_about");
const tourModal = document.querySelector(".modal_tour");
const body = document.querySelectorAll("section");
const footer = document.querySelector("footer");
const x = document.querySelector(".modal__close-btn");
const tourX = document.querySelector(".modal__tour-close-btn");
const heading = document.querySelector(".title_about");
const header = document.querySelector("header");
const tourHeading = document.querySelector(".tour h2");

const popup = document.querySelector(".popup");
const trailer = document.querySelector("#trailer");
const closePopup = document.querySelector(".popup__close-btn");


trailer.addEventListener("click", function() {
    popup.classList.toggle("active");
});

closePopup.addEventListener("click", function() {
    popup.classList.toggle("active");
    document.getElementById("popupVideo").src = "";
    document.getElementById("popupVideo").src = "https://www.youtube.com/embed/Va5uWtsU6J8";
});

readMore.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal modal_about"){
            section.style.display = "none";
        }
    }
    header.style.display = "none";
    footer.style.display = "none";
    modal.style.visibility= "visible";
    modal.scrollIntoView();
})

x.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal modal_about"){
            section.style.display = "block";
            tourModal.style.display = "flex";
        }
    }
    header.style.display = "block";
    footer.style.display = "block";
    modal.style.visibility= "hidden";
    heading.scrollIntoView();
})

moreDates.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal modal_tour"){
            section.style.display = "none";
        }
    }
    header.style.display = "none";
    footer.style.display = "none";
    tourModal.style.visibility= "visible";
    tourModal.scrollIntoView();
})

tourX.addEventListener("click", function(){
    for (let section of body){
            if (section.className !== "modal modal_tour"){
            section.style.display = "block";
            modal.style.display = "flex";
        }
    }
    header.style.display = "block";
    footer.style.display = "block";
    tourModal.style.visibility= "hidden";
    tourHeading.scrollIntoView();
})

// MODAL ARROWS
const aboutArrow = document.querySelector(".modal__arrow_about");
const tourArrow = document.querySelector(".modal__arrow_tour");
const mainArrow = document.querySelector(".main-arrow");
const pageTop = document.querySelector("body");

aboutArrow.addEventListener("click", function(){
    modal.scrollIntoView({behavior: "smooth"});
})

tourArrow.addEventListener("click", function(){
    tourModal.scrollIntoView({behavior: "smooth"});
})

mainArrow.addEventListener("click", function(){
    pageTop.scrollIntoView({behavior: "smooth"});
})