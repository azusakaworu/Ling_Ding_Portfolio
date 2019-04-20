const
    lightbox = document.querySelector('.lightbox'),
    closeLightbox = document.querySelector('.close-lightbox');

function openBox() {
    lightbox.classList.add('show-lightbox');
}

function closeLBox() {
    lightbox.style.display = "none";
}


closeLightbox.addEventListener('click', closeLBox);