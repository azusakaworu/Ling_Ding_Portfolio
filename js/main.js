const
// menu
    menuIcon = document.querySelector('#menuIcon'),
    menuColumn = document.querySelector('#menuColumn'),


//lightbox
    lightbox = document.querySelector('.lightbox'),
    showLightbox = document.querySelectorAll('.show'),
    closeLightbox = document.querySelector('.close-lightbox');



function closeLBox() {
    lightbox.style.display = "none";
}


// open lihgtbox for each imgs
for (let i = 0; i < showLightbox.length; i++) {

    showLightbox[i].addEventListener('click',
        function openBox() {
            console.log('hahah');
            lightbox.style.display = "block";
        });

        showLightbox[i].addEventListener('mouseover',
function hoverImg(){
   // console.log('bigbig');
     
});

}





closeLightbox.addEventListener('click', closeLBox);

