console.log('Slider JS loaded');
const sliderContainer = document.querySelector('.trending-slider');
const slider = document.querySelector('.slider-track');

const nextButton = document.querySelector('.slider-next');
const prevButton = document.querySelector('.slider-prev');

let currentPosition = 0;

// Get one movie card width + gap
function getMoveAmount() {

    const movieItem = slider.querySelector('.movie-item');

    const gap = parseFloat(getComputedStyle(slider).gap) || 0;

    return movieItem.offsetWidth + gap;
}

// Get maximum distance slider can move
function getMaxPosition() {

    return slider.scrollWidth - sliderContainer.clientWidth;
}

// Update arrow button state
function updateButtons() {

    const maxPosition = getMaxPosition();

    prevButton.disabled = currentPosition <= 0;
    nextButton.disabled = currentPosition >= maxPosition;
}

// Move slider forward
nextButton.addEventListener('click', function () {

    const moveAmount = getMoveAmount();
    const maxPosition = getMaxPosition();

    currentPosition = Math.min(
        currentPosition + moveAmount,
        maxPosition
    );

    slider.style.transform = `translateX(-${currentPosition}px)`;

    updateButtons();
});

// Move slider backward
prevButton.addEventListener('click', function () {

    const moveAmount = getMoveAmount();

    currentPosition = Math.max(
        currentPosition - moveAmount,
        0
    );

    slider.style.transform = `translateX(-${currentPosition}px)`;

    updateButtons();
});

// Set initial button state
updateButtons();