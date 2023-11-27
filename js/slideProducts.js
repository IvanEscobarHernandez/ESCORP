/* const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('mouseover', (event) => {
        event.preventDefault();
        imgId=imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth=document.querySelector('.img-showcase img:first-child').clientWidth;
    document.querySelector('.img-showcase').style.transform=`translateX(${- (imgId -1) * displayWidth}px)`;
} */

document.addEventListener("click",function(e){
    /* console.log(e.target); */
    if(e.target.classList.contains("gallery-item")){
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        $('#gallery-modal').modal('show')
    }  
});