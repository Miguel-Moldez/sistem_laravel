const slides = document.getElementById('slides');
const indicators = document.querySelectorAll('.indicator');
const totalSlides = slides.children.length;
let currentSlide = 0;

function goToSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators(index);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    goToSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    goToSlide(currentSlide);
}

function updateIndicators(index) {
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('bg-gray-800', i === index);
        indicator.classList.toggle('bg-gray-400', i !== index);
    });
}

document.getElementById('nextButton').addEventListener('click', nextSlide);
document.getElementById('prevButton').addEventListener('click', prevSlide);

setInterval(nextSlide, 5000);
