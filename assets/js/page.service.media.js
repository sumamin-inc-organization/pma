// slider
const images = document.querySelectorAll(".image-container img");
const totalImages = images.length;
let imageIndex = 0;
let interval;

function updateSlider() {
	images.forEach((image) => {
		image.classList.remove("image-active");
	});
	images[imageIndex].classList.add("image-active");
}

function nextImage() {
	imageIndex++;
	if (imageIndex >= totalImages) {
		imageIndex = 0;
	}
	updateSlider();
}

function autoPlay() {
	interval = setInterval(nextImage, 3000);
}

updateSlider();
autoPlay();