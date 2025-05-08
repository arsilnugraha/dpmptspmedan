// Initialize AOS
AOS.init({
	duration: 1000,
	once: true,
	offset: 100,
});

// Initialize Enhanced Swiper
if (document.querySelector(".news-slider")) {
	new Swiper(".news-slider", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		grabCursor: true,
		autoplay: {
			delay: 7000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1024: {
				slidesPerView: 3,
			},
		},
	});
}

new Swiper(".hero-slider", {
	effect: "fade",
	speed: 1000,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});

// Add scroll animations
window.addEventListener("scroll", () => {
	const scrolled = window.scrollY;
	const parallaxElements = document.querySelectorAll(".parallax");

	parallaxElements.forEach((element) => {
		const speed = element.dataset.speed || 0.5;
		element.style.transform = `translateY(${scrolled * speed}px)`;
	});
});

// Add hover animations for portal items
document.querySelectorAll(".portal-item").forEach((item) => {
	item.addEventListener("mouseenter", function () {
		this.style.transform = "translateY(-10px)";
	});

	item.addEventListener("mouseleave", function () {
		this.style.transform = "translateY(0)";
	});
});

// Add loading animation
window.addEventListener("load", () => {
	document.body.classList.add("loaded");
});

// Initialize custom cursor
const cursor = document.createElement("div");
cursor.classList.add("custom-cursor");
document.body.appendChild(cursor);

document.addEventListener("mousemove", (e) => {
	cursor.style.left = e.clientX + "px";
	cursor.style.top = e.clientY + "px";
});

// Add hover effect for interactive elements
const interactiveElements = document.querySelectorAll("a, button");
interactiveElements.forEach((el) => {
	el.addEventListener("mouseenter", () => {
		cursor.classList.add("cursor-hover");
	});

	el.addEventListener("mouseleave", () => {
		cursor.classList.remove("cursor-hover");
	});
});

$(document).ready(function () {
	$("#sites-carousel").owlCarousel({
		margin: 30,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		loop: true,
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1200: {
				items: 3,
			},
		},
	});
});

// ================ SLIDER ========================
document.addEventListener("DOMContentLoaded", function () {
	// Slider settings
	const sliderSettings = {
		autoplay: true,
		delay: 7000,
		currentSlide: 0,
		totalSlides: document.querySelectorAll(".slide").length,
		isAnimating: false,
	};

	// DOM Elements
	const slides = document.querySelectorAll(".slide");
	const dots = document.querySelectorAll(".nav-dot");
	const prevButton = document.querySelector(".prev-button");
	const nextButton = document.querySelector(".next-button");
	const progressBar = document.querySelector(".slider-progress");
	const currentSlideElem = document.querySelector(".current-slide");
	const totalSlidesElem = document.querySelector(".total-slides");

	// Initialize slider
	function initSlider() {
		// Set total slides
		totalSlidesElem.textContent = sliderSettings.totalSlides
			.toString()
			.padStart(2, "0");
		currentSlideElem.textContent = "01";

		// Initialize first slide animations
		animateSlide(slides[0]);

		// Start autoplay
		if (sliderSettings.autoplay) {
			startAutoplay();
		}

		// Initialize progress bar
		animateProgressBar();
	}

	// Start autoplay
	let autoplayTimer;
	function startAutoplay() {
		clearInterval(autoplayTimer);
		autoplayTimer = setInterval(() => {
			goToNextSlide();
		}, sliderSettings.delay);
	}

	// Reset autoplay
	function resetAutoplay() {
		if (sliderSettings.autoplay) {
			clearInterval(autoplayTimer);
			startAutoplay();
		}
	}

	// Animate progress bar
	function animateProgressBar() {
		progressBar.style.width = "0%";
		progressBar.style.transition = "none";
		setTimeout(() => {
			progressBar.style.transition = `width ${sliderSettings.delay}ms linear`;
			progressBar.style.width = "100%";
		}, 50);
	}

	// Animate slide content using GSAP
	function animateSlide(slide) {
		// Animate heading
		const heading = slide.querySelector(".slide-heading h2");
		gsap.fromTo(
			heading,
			{ y: 50, opacity: 0 },
			{ y: 0, opacity: 1, duration: 1, delay: 0.3, ease: "power2.out" }
		);

		// Animate text
		const text = slide.querySelector(".slide-text p");
		gsap.fromTo(
			text,
			{ y: 30, opacity: 0 },
			{ y: 0, opacity: 1, duration: 1, delay: 0.8, ease: "power2.out" }
		);
	}

	// Go to specific slide
	function goToSlide(index) {
		if (sliderSettings.isAnimating) return;
		sliderSettings.isAnimating = true;

		// Hide current slide
		slides[sliderSettings.currentSlide].classList.remove("active");
		dots[sliderSettings.currentSlide].classList.remove("active");

		// Update current slide
		sliderSettings.currentSlide = index;

		// Show new slide
		slides[sliderSettings.currentSlide].classList.add("active");
		dots[sliderSettings.currentSlide].classList.add("active");

		// Update slide counter
		currentSlideElem.textContent = (sliderSettings.currentSlide + 1)
			.toString()
			.padStart(2, "0");

		// Animate new slide content
		animateSlide(slides[sliderSettings.currentSlide]);

		// Reset autoplay
		resetAutoplay();

		// Reset progress bar
		animateProgressBar();

		// Reset animation flag after transition
		setTimeout(() => {
			sliderSettings.isAnimating = false;
		}, 1200);
	}

	// Go to next slide
	function goToNextSlide() {
		const nextIndex =
			(sliderSettings.currentSlide + 1) % sliderSettings.totalSlides;
		goToSlide(nextIndex);
	}

	// Go to previous slide
	function goToPrevSlide() {
		const prevIndex =
			(sliderSettings.currentSlide - 1 + sliderSettings.totalSlides) %
			sliderSettings.totalSlides;
		goToSlide(prevIndex);
	}

	// Event listeners
	prevButton.addEventListener("click", function () {
		goToPrevSlide();
	});

	nextButton.addEventListener("click", function () {
		goToNextSlide();
	});

	// Dot navigation
	dots.forEach((dot, index) => {
		dot.addEventListener("click", function () {
			if (index !== sliderSettings.currentSlide) {
				goToSlide(index);
			}
		});
	});

	// Pause autoplay on hover
	const slider = document.querySelector(".revolution-slider");
	slider.addEventListener("mouseenter", function () {
		if (sliderSettings.autoplay) {
			clearInterval(autoplayTimer);
		}
	});

	slider.addEventListener("mouseleave", function () {
		if (sliderSettings.autoplay) {
			startAutoplay();
		}
	});

	// Keyboard navigation
	document.addEventListener("keydown", function (e) {
		if (e.key === "ArrowLeft") {
			goToPrevSlide();
		} else if (e.key === "ArrowRight") {
			goToNextSlide();
		}
	});

	// Initialize slider
	initSlider();
});
