
const carousel = document.querySelector(".carousel");
firstImg = carousel.querySelectorAll("img")[0];/*Pour les flèches */
arrowIcons = document.querySelectorAll(".wrapper i");/*Pour les flèches */
let isDragStart = false, prevPageX, prevScrollLeft;
const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {/*Pour les flèches */
    let firstImgWidth = firstImg.clientWidth + 14; /*avoir la 1ere img & ajouter margin 14 comme css (pour les fleches) */
    icon.addEventListener("click", () => {/*Pour les flèches */
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;/*Pour les flèches */
        setTimeout(() => showHideIcons(), 60); // appel showhide apres 60s
    });/*Pour les flèches */
});/*Pour les flèches */
const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;/*e.touched = mobile*/
    prevScrollLeft = carousel.scrollLeft;
}
const dragging = (e) => {
    // scroll images/carousel à gauche suivant le pointer de la souris
    if (!isDragStart) return;
    e.preventDefault();
    carousel.classList.add("dragging");
    let positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}
const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);/*touch = mobile*/
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchup", dragStop);
carousel.addEventListener("mouseleave", dragStop);
carousel.addEventListener("touchend", dragStop);