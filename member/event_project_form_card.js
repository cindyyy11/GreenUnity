// carousel-script.js

let currentIndex = 0;
const totalSlides = document.querySelectorAll('.card').length;
const cardCarousel = document.getElementById('cardCarousel');

let touchStartX = 0;

function handleTouchStart(event) {
    touchStartX = event.touches[0].clientX;
}

function handleTouchMove(event) {
    if (touchStartX - event.touches[0].clientX > 50) {
        nextSlide();
    } else if (touchStartX - event.touches[0].clientX < -50) {
        prevSlide();
    }
}

function nextSlide() {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
        updateCarousel();
    }
}

function prevSlide() {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
}

function updateCarousel() {
    const newTransformValue = -currentIndex * 320; // Adjust the width of each card + margin
    cardCarousel.style.transform = `translateX(${newTransformValue}px)`;
}

// Add touch event listeners
cardCarousel.addEventListener('touchstart', handleTouchStart, false);
cardCarousel.addEventListener('touchmove', handleTouchMove, false);
