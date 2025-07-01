// Image sources for each position
const images = [
    "./img/h6.jpg",
     "./img/h14.jpg", 
     "./img/h1.jpg"
];



let index = 0;
const imgElement = document.getElementById("center-image");

function changeImage() {
    imgElement.style.opacity = "0"; // Fade-out effect
    
    setTimeout(() => {
        index = (index + 1) % images.length; // Loop through images
        imgElement.src = images[index];
        imgElement.style.opacity = "1"; // Fade-in effect
    }, 500); // Wait for fade-out before changing image
}

setInterval(changeImage, 3000); // Change image every 1 second
