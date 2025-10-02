"use strict";

// Reset the form when the modal is closed
const form = document.getElementById("formLucmar");
const formModal = document.getElementById("formModal");

// Detecting when modal is closed
if (formModal) {
    formModal.addEventListener('hidden.bs.modal', function() {
    // reset the form
    form.reset();
    // clear the files (the divs containing the file names)
    attachedImagesContainer.innerHTML = ""; 
    });
}



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

// Adding attachments one-by-one functionality

const addAttachmentsOneByOne = function () {
    const attachment = form.elements.image;
    const label = document.querySelector(".attach-file-name");
    
    // Set initial label text
    updateLabelText(0);
}

addAttachmentsOneByOne();

// Function to update the label text based on attachment count
function updateLabelText(count) {
    const label = document.querySelector(".attach-file-name");
    
    if (count === 0) {
        label.textContent = "Adaugă imagini (maxim 5)";
    } else if (count >= 1 && count <= 4) {
        label.textContent = "Mai adaugă (maxim 5)";
    } else if (count === 5) {
        label.textContent = "Limita de 5 imagini atinsă";
    }
}



// Display the name of the file the user uploads

const attachImageLabel = document.querySelector(".attach-image-label");
const attachImgDeleteBtns = document.querySelectorAll('.attached-img-delete');
const attachedImagesContainer = document.querySelector('.attached-images-container');


if (attachImageLabel) {
    const fileInput = form.elements.image;
    let attachmentsArray = [];

    // when files are selected we copy to our array
    attachImageLabel.addEventListener("change", () => {
        // Check if we can add more files
        
        const availableSlots = 5 - attachmentsArray.length;
        // if (availableSlots <= 0) return;

        if (availableSlots <= 0) {
            showToast("Maximum 5 imagini!", true);
            // Reset everything
            attachmentsArray = [];
            updateLabelText(attachmentsArray.length);
            renderAttachments();
            
            // Clear the file input
            fileInput.value = "";
            return;
        }

        // Add only as many files as we have available slots
        const filesToAdd = Array.from(fileInput.files).slice(0, availableSlots);
        attachmentsArray.push(...filesToAdd);
        
        // Update the label
        updateLabelText(attachmentsArray.length);
        
        renderAttachments();
    });

    function renderAttachments() {
        attachedImagesContainer.innerHTML = "";

        attachmentsArray.forEach((file, index) => {
            const newDiv = document.createElement("div");
            newDiv.classList.add("image-item");
            const deleteBtn = document.createElement("button");
            deleteBtn.classList.add("delete-btn");
            deleteBtn.innerHTML = '<i class="fa-solid fa-circle-xmark fa-circle-custom"></i>';

            deleteBtn.addEventListener("click", () => {
                // remove the file from our array and re-render
                attachmentsArray.splice(index, 1);
                
                // Update the label
                updateLabelText(attachmentsArray.length);
                
                renderAttachments();

                // update the input's FileList
                const dataTransfer = new DataTransfer();
                attachmentsArray.forEach(f => dataTransfer.items.add(f));
                fileInput.files = dataTransfer.files;
            });

            newDiv.appendChild(document.createTextNode(file.name));
            newDiv.appendChild(deleteBtn);

            attachedImagesContainer.appendChild(newDiv);
        });

        // Update the input's FileList to match our array
        const dataTransfer = new DataTransfer();
        attachmentsArray.forEach(f => dataTransfer.items.add(f));
        fileInput.files = dataTransfer.files;
        
    }
}




// Spinner controller
const showSpinner = (show) => {
    const spinner = document.querySelector(".spinner-border");
    if (show) {
        spinner.classList.remove("d-none");
    } else {
        spinner.classList.add("d-none");
    }
};

if (form) {
    
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

    // Adding the token to formData
    formData.append('cf-turnstile-response', turnstileToken);

    try {
        const response = await fetch("/contact-form", {
            method: "POST",
            body: formData,
            redirect: 'manual'
        });

        // Check if we got a redirect response
        // if (response.type === 'opaqueredirect' || response.status === 302 || response.status === 301) {
        //     // Redirect to the tooManyRequests page
        //     form.reset();
        //     window.location.href = "tooManyRequests.php";
        //     return;
        // }

        if (response.status === 429) {
            // Rate limit exceeded
            window.location.href = "/tooManyRequests";
            return;
        }

        // If not a redirect, parse as a JSON

        let result = await response.json();

        if (!response.ok) {
            throw new Error(result.error || "Cererea a esuat!");
        }

        if (typeof gtag === 'function') {
            gtag('event', 'conversion', {
            'send_to': 'AW-17545117486/6gRGCMaHmqUbEK7-lK5B'
            });
        }

        showToast("Mesajul a fost trimis cu succes!");
        form.reset();
        showSpinner(false);
        setTimeout(() => {
            window.location.href = "/thank-you";
        }, 1500);
    } catch (error) {
        if (error instanceof SyntaxError) {
            showToast('Server returned an invalid response. Please try again.', true);
        } else {
            showToast(error.message || 'Eroare la trimiterea mesajului!', true);
        }
        showSpinner(false);
    }
    });
}



// Cookies popup functionality

const cookiesPopup = document.querySelector(".cookies-popup");
const okBtnCookies = document.querySelector(".ok-cookies-button");

if(!localStorage.getItem('arclucmar_cookie')) {
        cookiesPopup.classList.remove("d-none");
    } 

if (okBtnCookies) {

    okBtnCookies.addEventListener('click', function() {
    cookiesPopup.classList.add("d-none");
    localStorage.setItem('arclucmar_cookie', 'true');
    });
}



// Portfolio: projects hover functionality
function cardEffectAdd() {
    const cards = document.querySelectorAll(".card-custom");
    const cardOverlays = document.querySelectorAll(".card-overlay");
    const cardTitles = document.querySelectorAll(".card-title-custom");
    const cardImgsCustom = document.querySelectorAll(".card-img-custom");

    cards.forEach((card, index) => {
        card.addEventListener('mouseover', function() {
            if (window.innerWidth > 992) {
                cardOverlays[index].classList.add("show");
                cardTitles[index].classList.add("text-white-custom");
                cardImgsCustom[index].classList.add("card-blur");
            } 
        })

        card.addEventListener('mouseout', function() {
            if (window.innerWidth > 992) {
                cardOverlays[index].classList.remove("show");
                cardTitles[index].classList.remove("text-white-custom");
                cardImgsCustom[index].classList.remove("card-blur");
            }
        })
    })
}

cardEffectAdd();


// Side buttons effect

function sideButtonsEffectAdd() {
    const messageIcon = document.querySelector('.side-buttons-message-icon');
    const messageText = document.querySelector('.side-buttons-message-text');

    const whatsappIcon = document.querySelector('.side-buttons-whatsapp-icon');
    const whatsappText = document.querySelector('.side-buttons-whatsapp-text');

if (messageIcon && whatsappIcon) {

    messageIcon.addEventListener('mouseover', function() {
        if (window.innerWidth > 992) {
            messageText.classList.add('show');
        }
    });

    messageIcon.addEventListener('mouseout', function() {
        if (window.innerWidth > 992) {
            messageText.classList.remove('show');
        }
    });

    whatsappIcon.addEventListener('mouseover', function() {
        if (window.innerWidth > 992) {
            whatsappText.classList.add('show');
        }
    })

    whatsappIcon.addEventListener('mouseout', function() {
        if (window.innerWidth > 992) {
            whatsappText.classList.remove('show');
        }
    })
}
}

sideButtonsEffectAdd();

window.addEventListener("resize", () => {});

// Closing the navbar when clicking outside of it
const navbar = document.querySelector(".navbar-custom");
const navbarCollapse = document.querySelector(".navbar-collapse");

if (navbar) {
    document.addEventListener('click', function(e) {
    const clicked = e.target;
    if(!navbar.contains(clicked)) {
        navbarCollapse.classList.remove('show');
    }
})
}


// Back to top button functionality


function userScroll() {
    const topBtn = document.querySelector('.back-to-top-button');
    if (topBtn)
    {
        window.addEventListener('scroll', () => {
        if (window.scrollY > 1000) {
            topBtn.classList.remove('d-none');
        } else {
            topBtn.classList.add('d-none');
        }
        })
    }
        
    
    
}

function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

document.addEventListener('DOMContentLoaded', userScroll);
if(document.querySelector('.back-to-top-button')) {
    document.querySelector('.back-to-top-button').addEventListener('click', scrollToTop);
}












