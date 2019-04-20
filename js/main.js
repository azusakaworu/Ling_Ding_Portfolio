const
    lightbox = document.querySelector('.lightbox'),
    showLightbox = document.querySelectorAll('.show'),
    closeLightbox = document.querySelector('.close-lightbox');

function closeLBox() {
    lightbox.style.display = "none";
}

for (let i = 0; i < showLightbox.length; i++) {

    showLightbox[i].addEventListener('click',
        function openBox() {
            console.log('hahah');
            lightbox.style.display = "block";
        });
}
closeLightbox.addEventListener('click', closeLBox);
