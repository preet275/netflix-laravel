// Toggle search input when search button is clicked
const searchBox = document.querySelector('.search-box');
const searchBtn = document.querySelector('.search-btn');

searchBtn.addEventListener('click', function () {
    searchBox.classList.toggle('active');
});

const navbar = document.querySelector('.browse-navbar');

window.addEventListener('scroll', function () {

    if (window.scrollY === 0) {

        // Page bilkul top te
        navbar.classList.remove('transparent', 'dark');

    } else if (window.scrollY < 100) {

        // Thoda scroll
        navbar.classList.add('transparent');
        navbar.classList.remove('dark');

    } else {

        // Hor scroll
        navbar.classList.remove('transparent');
        navbar.classList.add('dark');

    }

});

// Movie slider
// Get all movie sliders
const movieSliders = document.querySelectorAll('.movie-slider');

movieSliders.forEach(function (slider) {

    // Get elements from current slider only
    const movieRow = slider.querySelector('.movie-row');
    const nextButton = slider.querySelector('.slider-next');
    const prevButton = slider.querySelector('.slider-prev');

    const slideAmount = 268; // 250px card + 18px gap

    // Get original movie cards
    const originalCards = [...movieRow.children];

    // Clone all original cards
    originalCards.forEach(function (card) {

        const clone = card.cloneNode(true);

        movieRow.appendChild(clone);

    });

    // Current scroll position
    let currentPosition = 0;


    // Next button
    nextButton.addEventListener('click', function () {

        currentPosition += slideAmount;

        movieRow.scrollTo({
            left: currentPosition,
            behavior: 'smooth'
        });

        // When original cards finish, go back to start
        if (currentPosition >= slideAmount * originalCards.length) {

            setTimeout(function () {

                currentPosition = 0;

                movieRow.scrollTo({
                    left: 0,
                    behavior: 'instant'
                });

            }, 400);
        }

    });


    // Previous button
    prevButton.addEventListener('click', function () {

        // If we are at the beginning
        if (currentPosition <= 0) {

            currentPosition = slideAmount * originalCards.length;

            movieRow.scrollTo({
                left: currentPosition,
                behavior: 'instant'
            });
        }

        currentPosition -= slideAmount;

        movieRow.scrollTo({
            left: currentPosition,
            behavior: 'smooth'
        });

    });

});