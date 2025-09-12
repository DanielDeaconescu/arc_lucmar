"use strict";

// function scrollFunction() {
//   const theNavigation = document.querySelector(".navbar");
//   const toTopBtn = document.querySelector("#to-top");

//   window.addEventListener("scroll", () => {
//     if (window.scrollY > 50) {
//       theNavigation.classList.add("navbar-sticky");
//       toTopBtn.classList.add("show");
//     } else {
//       theNavigation.classList.remove("navbar-sticky");
//       toTopBtn.classList.remove("show");
//     }
//   });
// }

// Use Intersection Observer to make the navigation bar sticky
// const nav = document.querySelector("nav");
// const navHeight = nav.getBoundingClientRect().height;
// const hero = document.querySelector("header");

// const makeNavSticky = function (entries, observer) {
//   const [entry] = entries;
//   if (!entry.isIntersecting) {
//     nav.classList.add("sticky-top", "navbar-sticky");
//   } else {
//     nav.classList.remove("sticky-top", "navbar-sticky");
//   }
// };

// const options = {
//   root: null,
//   rootMargin: `-${navHeight}px`,
//   threshold: 0,
// };

// const observerHero = new IntersectionObserver(makeNavSticky, options);
// observerHero.observe(hero);

// function scrollToTop() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }

// Use Intersection Observer to reveal elements on scroll

// const allSections = document.querySelectorAll("section");

// const slideSection = function (entries, observer) {
//   const [entry] = entries;
//   if (!entry.isIntersecting) return;
//   entry.target.classList.remove("section-hidden");
//   observer.unobserve(entry.target);
// };

// const options2 = {
//   root: null,
//   threshold: 0.15,
// };

// const sectionObserver = new IntersectionObserver(slideSection, options2);

// make all the sections invisible in the beginning
// allSections.forEach((item) => {
//   sectionObserver.observe(item);
//   item.classList.add("section-hidden");
// });

// carousel functionality
// const carouselInner = document.querySelector(".carousel-inner");
// const carouselItems = document.querySelectorAll(".carousel-item");
// const nextButton = document.querySelector(".carousel-control-next");
// const prevButton = document.querySelector(".carousel-control-prev");
// const dotsContainer = document.querySelector(".dots");

// let clickCounter = 0;
// let maxSlide = carouselItems.length - 1;

// // a function that creates a dot for every slide
// const createDots = function () {
//   carouselItems.forEach((item, index) => {
//     dotsContainer.insertAdjacentHTML(
//       "beforeend",
//       `<button class="slider__button" data-slide="${index}"></button>`
//     );
//   });
// };

// createDots();

// // a function that activates the dots
// const activateDot = function (slideNumber) {
//   // remove the "slider__button--active" from all the dots
//   document
//     .querySelectorAll(".slider__button")
//     .forEach((button) => button.classList.remove("slider__button--active"));
//   // add the "slider__button--active" to the dot corresponding to the input "slideNumber"
//   document
//     .querySelector(`.slider__button[data-slide="${slideNumber}"]`)
//     .classList.add("slider__button--active");
// };

// activateDot(0);

// const goToSlide = function (slideNumber) {
//   carouselItems.forEach((item, index) => {
//     item.style.display = "flex";
//     item.style.transform = `translateX(${100 * (index - slideNumber)}%)`;
//   });
// };

// goToSlide(0);

// const nextSlideFunction = function () {
//   clickCounter === maxSlide ? (clickCounter = 0) : clickCounter++;
//   goToSlide(clickCounter);
//   activateDot(clickCounter);
// };

// const prevSlideFunction = function () {
//   clickCounter === 0 ? (clickCounter = maxSlide) : clickCounter--;
//   goToSlide(clickCounter);
//   activateDot(clickCounter);
// };

// // whenever we click on a dot, we want to go to the corresponding slide
// dotsContainer.addEventListener("click", function (e) {
//   if (e.target.classList.contains("slider__button")) {
//     const slideNumber = e.target.dataset.slide;
//     goToSlide(slideNumber);
//     activateDot(slideNumber);
//   }
// });

// nextButton.addEventListener("click", nextSlideFunction);
// prevButton.addEventListener("click", prevSlideFunction);

// // navigate the carousel with the arrows
// document.addEventListener("keydown", function (e) {
//   if (e.key === "ArrowRight") nextSlideFunction();
//   else if (e.key === "ArrowLeft") prevSlideFunction();
// });

// function incrementStats() {
//   const counters = document.querySelectorAll(".counter");

//   counters.forEach((counter) => {
//     counter.innerText = 0;

//     const updateCounter = () => {
//       const target = +counter.getAttribute("data-target");
//       const c = +counter.innerText;

//       const increment = target / 200;

//       if (c < target) {
//         counter.innerText = Math.ceil(c + increment);
//         setTimeout(updateCounter, 1);
//       } else {
//         counter.innerText = target;
//       }
//     };
//     updateCounter();
//   });
// }

// Event Listeners
// document.addEventListener("DOMContentLoaded", incrementStats);

// document.querySelector("#to-top").addEventListener("click", scrollToTop);

// making the carousel work on my own

// const dimensions = document.querySelector(".navbar-custom").getBoundingClientRect();
// console.log(dimensions.height);


// Toast controller
const showToast = (message, isError = false) => {
    const toast = document.getElementById("toast");
    toast.className = isError ? 'toast-error' : 'toast-success';
    toast.textContent = message;
    toast.classList.add("toast-visible");

    setTimeout(() => {
        toast.classList.remove("toast-visible");
    }, 3000);
};

// Function to validate a given form
const validateForm = (form) => {
    const errors = [];
    const fields = [
        {
            name: "name",
            label: "Nume"
        },
        {
            name: "phone",
            label: "Telefon"
        },
        {
            name: "description",
            label: "Descriere"
        }
    ];

    // If a field is missing, throw a relevant error
    fields.forEach((field) => {
        if(!form.elements[field.name].value.trim()) {
            errors.push(`${field.label} este obligatoriu`);
        }
    });

    // File (image) validation (JPEG, PNG, GIF, WebP, AVIF)
    const attachment = form.elements.image;
    if (attachment && attachment.files.length > 0) {
        const allowedTypes = ["image/jpeg", "image/png", "image/gif", "image/webp", "image/avif", "image/svg+xml"];
        const files = Array.from(attachment.files);

        files.forEach((file) => {
            if (!allowedTypes.includes(file.type)) {
                errors.push(`Imagine invalida: ${file.name}. Formatele aceptate sunt: JPEG, PNG, GIF, WebP, AVIF si SVG.`);
            }
        });
    }

    return errors;
}

// Form submission
const form = document.getElementById("formLucmar");

// Display the name of the file the user uploads

const attachImageLabel = document.querySelector(".attach-image-label");

attachImageLabel.addEventListener("change", () => {
    const attachment = form.elements.image;
    const attachImageName = document.querySelector(".attach-file-name");
    if (attachment.files.length > 0) {
        attachImageName.textContent = attachment.files[0].name;
    }
});


// Spinner controller
const showSpinner = (show) => {
    const spinner = document.querySelector(".spinner-border");
    if (show) {
        spinner.classList.remove("d-none");
    } else {
        spinner.classList.add("d-none");
    }
};

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    showSpinner(true);
    const formData = new FormData(form);

    // Check if the Turnstile token exists
    const turnstileToken = document.querySelector('[name="cf-turnstile-response"]')?.value;

    if (!turnstileToken) {
        showToast("Please complete the CAPTCHA verification!", true);
        showSpinner(false);
        return;
    }

    // Validation
    const errors = validateForm(form);
    if (errors.length > 0) {
        showToast(errors.join(", "), true);
        showSpinner(false);
        return;
    }

    try {
        const response = await fetch("contact-form.php", {
            method: "POST",
            body: formData
        });

        if (!response.ok) {
            const result = await response.json();
            throw new Error(result.error || "Cererea a esuat!");
        }

        showToast("Mesajul a fost trimis cu succes!");
        form.reset();
        showSpinner(false);
        setTimeout(() => {
            window.location.href = "thank-you.php";
        }, 1500);
    } catch (error) {
        showToast(error.message || 'Eroare la trimiterea mesajului!', true);
        showSpinner(false);
    }
});