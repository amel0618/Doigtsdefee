function scrolll() {
    var left = document.querySelector(".carousel");
    left.scrollBy(-350, 0);
}

function scrollr() {
    var right = document.querySelector(".carousel");
    right.scrollBy(350, 0);
}

document.getElementById("left").addEventListener("click", scrolll);
document.getElementById("right").addEventListener("click", scrollr);
