
<style>
html.lenis,
html.lenis body {
	height: auto;
}

.lenis.lenis-smooth {
	scroll-behavior: auto !important;
}

.lenis.lenis-smooth [data-lenis-prevent] {
	overscroll-behavior: contain;
}

.lenis.lenis-stopped {
	overflow: hidden;
}

.lenis.lenis-smooth iframe {
	pointer-events: none;
}
			body {
				margin: 0;
			}
			.section {
				height: 100vh;
			}
			.section:nth-child(odd) {
				background: #eee;
			}
			.section:nth-child(even) {
				background: #ccc;
			}
		</style>
		<div class="section"></div>
		<div class="section"></div>
		<div class="section"></div>
		<div class="section"></div>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script> 
<script charset="utf-8">
	// window.onload = function () {
	//     if (window.innerWidth > 1080) {
	//         luxy.init();
	//     }
	// }
	$(document).ready(function() {
		const lenis = new Lenis({
			smoothWheel: true,
			smoothTouch: true,
		});
		function raf(time) {
			lenis.raf(time);
			requestAnimationFrame(raf);
		}
		requestAnimationFrame(raf);
	});
</script>
