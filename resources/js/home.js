function scrollLeft() {
    var slide = document.querySelector(".carousel-slide");
    slide.scrollBy(-350, 0);
}

function scrollRight() {
    var slide = document.querySelector(".carousel-slide");
    slide.scrollBy(350, 0);
}

document.getElementById("prev-button").addEventListener("click", scrollLeft);
document.getElementById("next-button").addEventListener("click", scrollRight);

