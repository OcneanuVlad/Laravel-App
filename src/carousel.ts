var track: HTMLElement = document.querySelector(
  ".carousel-track"
) as HTMLElement;
const slides = Array.from(track.children as HTMLCollectionOf<HTMLElement>);
const prevBtn = document.querySelector(".carousel-prev") as HTMLElement;
const nextBtn = document.querySelector(".carousel-next") as HTMLElement;
let slideWidth = slides[0].getBoundingClientRect().width;
let indicatorText: number = 1;

// arrange the slides next to one another
slides.forEach((slide, index) => {
  slide.style.left = `${slideWidth * index}px`;
});

prevBtn.addEventListener("click", prev);

nextBtn.addEventListener("click", next);

let timer = setInterval(next, 3000);

const moveToSlide = (
  track: HTMLElement,
  currentSlide: HTMLElement,
  targetSlide: HTMLElement
) => {
  track.style.transform = `translateX(-${targetSlide.style.left})`;
  currentSlide.classList.remove("current-slide");
  targetSlide.classList.add("current-slide");
};

window.addEventListener("resize", () => {
  slideWidth = slides[0].getBoundingClientRect().width;

  slides.forEach((slide, index) => {
    slide.style.left = `${slideWidth * index}px`;
  });
  const currentSlide = track.querySelector(".current-slide") as HTMLElement;
  moveToSlide(track, currentSlide, currentSlide);
});

function next() {
  indicatorText++;
  let indicator = document.querySelector(".indicator") as HTMLElement;

  const currentSlide = track.querySelector(".current-slide") as HTMLElement;
  let nextSlide = currentSlide.nextElementSibling as HTMLElement | null;
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
  let indicator = document.querySelector(".indicator") as HTMLElement;

  const currentSlide = track.querySelector(".current-slide") as HTMLElement;
  let prevSlide = currentSlide.previousElementSibling as HTMLElement | null;
  if (!prevSlide) {
    prevSlide = slides[slides.length - 1];
    indicatorText = 4;
  }
  moveToSlide(track, currentSlide, prevSlide);
  indicator.innerHTML = "0" + indicatorText.toString();

  clearInterval(timer);
  timer = setInterval(next, 3000);
}
