const
    menuIcon = document.querySelector('#menuIcon'),
    menuColumn = document.querySelector('#menuColumn'),

    lightbox = document.querySelector('.lightbox'),
    showLightbox = document.querySelectorAll('.show'),
    closeLightbox = document.querySelector('.close-lightbox');

function closeLBox() {
    lightbox.style.display = "none";
}

function closeMenu(e) {
    // .style.width="";

}

// open lihgtbox for each imgs
for (let i = 0; i < showLightbox.length; i++) {
    showLightbox[i].addEventListener('click',
        function openBox() {
            console.log('hahah');
            lightbox.style.display = "block";
        });
}

function openMenu() {


}



closeLightbox.addEventListener('click', closeLBox);
menuIcon.addEventListener('click', openMenu);
menuColumn.addEventListener('click', closeMenu);
