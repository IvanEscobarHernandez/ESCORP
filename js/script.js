const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

inputBox.onkeyup = (e)=>{
    let userData= e.target.value;
    let emptyArray = [];
    if(userData){
        icon.onclick = () =>{
            webLink= "http://localhost/ESCORP/clean/index.php/search?q=$(userData)";
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
    }
}