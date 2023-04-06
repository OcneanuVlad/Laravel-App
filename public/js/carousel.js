"use strict";
var track = document.querySelector(".carousel-track");
const slides = Array.from(track.children);
const prevBtn = document.querySelector(".carousel-prev");
const nextBtn = document.querySelector(".carousel-next");
let slideWidth = slides[0].getBoundingClientRect().width;
let indicatorText = 1;
// arrange the slides next to one another
slides.forEach((slide, index) => {
    slide.style.left = `${slideWidth * index}px`;
});
prevBtn.addEventListener("click", prev);
nextBtn.addEventListener("click", next);
let timer = setInterval(next, 3000);
const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = `translateX(-${targetSlide.style.left})`;
    currentSlide.classList.remove("current-slide");
    targetSlide.classList.add("current-slide");
};
window.addEventListener("resize", () => {
    slideWidth = slides[0].getBoundingClientRect().width;
    slides.forEach((slide, index) => {
        slide.style.left = `${slideWidth * index}px`;
    });
    const currentSlide = track.querySelector(".current-slide");
    moveToSlide(track, currentSlide, currentSlide);
});
function next() {
    indicatorText++;
    let indicator = document.querySelector(".indicator");
    const currentSlide = track.querySelector(".current-slide");
    let nextSlide = currentSlide.nextElementSibling;
    if (!nextSlide) {
        nextSlide = slides[0];
        indicatorText = 1;
    }
    moveToSlide(track, currentSlide, nextSlide);
    indicator.innerHTML = "0" + indicatorText.toString();
    clearInterval(timer);
    timer = setInterval(next, 3000);
}
function prev() {
    indicatorText--;
    let indicator = document.querySelector(".indicator");
    const currentSlide = track.querySelector(".current-slide");
    let prevSlide = currentSlide.previousElementSibling;
    if (!prevSlide) {
        prevSlide = slides[slides.length - 1];
        indicatorText = 4;
    }
    moveToSlide(track, currentSlide, prevSlide);
    indicator.innerHTML = "0" + indicatorText.toString();
    clearInterval(timer);
    timer = setInterval(next, 3000);
}
