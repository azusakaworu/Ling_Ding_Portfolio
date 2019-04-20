const
menuIcon=document.querySelector('#menuIcon'),
menuMask = document.querySelector('#menuMask'),

    lightbox = document.querySelector('.lightbox'),
    showLightbox = document.querySelectorAll('.show'),
    closeLightbox = document.querySelector('.close-lightbox');

function closeLBox() {
    lightbox.style.display = "none";
}

function closeMenu(e){
    menuMask.style.display="none";

}

// open lihgtbox for each imgs
for (let i = 0; i < showLightbox.length; i++) {
    showLightbox[i].addEventListener('click',
        function openBox() {
            console.log('hahah');
            lightbox.style.display = "block";
        });
}

function openMenu(){
    menuMask.style.display = "block";

}



closeLightbox.addEventListener('click', closeLBox);
menuIcon.addEventListener('click',openMenu);
menuMask.addEventListener('click',closeMenu);
