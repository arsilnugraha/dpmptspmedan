<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const mainImage = document.getElementById('main-image');
        const thumbnails = document.querySelectorAll('.thumbnail');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const currentIndexEl = document.getElementById('current-index');
        const totalImagesEl = document.getElementById('total-images');
        const mainImageContainer = document.getElementById('main-image-display');
        const thumbnailsContainer = document.getElementById('thumbnails');
        const scrollLeftBtn = document.querySelector('.scroll-left');
        const scrollRightBtn = document.querySelector('.scroll-right');
        const fullscreenBtn = document.querySelector('.fullscreen-btn');
        const fullscreenView = document.getElementById('fullscreen-view');
        const fullscreenImage = document.getElementById('fullscreen-image');
        const fullscreenClose = document.querySelector('.fullscreen-close');
        
        // Variables
        let currentIndex = 0;
        const totalImages = thumbnails.length;
        
        // Set total images count
        if (totalImagesEl) {
            totalImagesEl.textContent = totalImages;
        }
        
        // Function to change main image
        function changeMainImage(index) {
            // Add loading class
            mainImageContainer.classList.add('loading');
            
            // Get new image source
            const newSrc = thumbnails[index].querySelector('img').src;
            
            // Update main image after short delay for animation
            setTimeout(() => {
                mainImage.classList.remove('animate');
                mainImage.src = newSrc;
                fullscreenImage.src = newSrc;
                
                // Wait for image to load
                mainImage.onload = function() {
                    // Remove loading class
                    mainImageContainer.classList.remove('loading');
                    
                    // Add animation class
                    mainImage.classList.add('animate');
                    
                    // Update current index
                    currentIndex = index;
                    if (currentIndexEl) {
                        currentIndexEl.textContent = currentIndex + 1;
                    }
                    
                    // Update active thumbnail
                    thumbnails.forEach(thumb => thumb.classList.remove('active'));
                    thumbnails[index].classList.add('active');
                    
                    // Scroll thumbnail into view
                    thumbnails[index].scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                };
            }, 200);
        }
        
        // Initialize first image
        if (mainImage && thumbnails.length > 0) {
            mainImage.src = thumbnails[0].querySelector('img').src;
            fullscreenImage.src = thumbnails[0].querySelector('img').src;
        }
        
        // Thumbnail click event
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                if (currentIndex !== index) {
                    changeMainImage(index);
                }
            });
        });
        
        // Navigation buttons
        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                const newIndex = (currentIndex - 1 + totalImages) % totalImages;
                changeMainImage(newIndex);
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                const newIndex = (currentIndex + 1) % totalImages;
                changeMainImage(newIndex);
            });
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                const newIndex = (currentIndex - 1 + totalImages) % totalImages;
                changeMainImage(newIndex);
            } else if (e.key === 'ArrowRight') {
                const newIndex = (currentIndex + 1) % totalImages;
                changeMainImage(newIndex);
            } else if (e.key === 'Escape' && fullscreenView.classList.contains('active')) {
                fullscreenView.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Thumbnails scroll buttons
        if (scrollLeftBtn) {
            scrollLeftBtn.addEventListener('click', function() {
                thumbnailsContainer.scrollBy({
                    left: -300,
                    behavior: 'smooth'
                });
            });
        }
        
        if (scrollRightBtn) {
            scrollRightBtn.addEventListener('click', function() {
                thumbnailsContainer.scrollBy({
                    left: 300,
                    behavior: 'smooth'
                });
            });
        }
        
        // Fullscreen mode
        if (fullscreenBtn) {
            fullscreenBtn.addEventListener('click', function() {
                fullscreenView.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        }
        
        if (fullscreenClose) {
            fullscreenClose.addEventListener('click', function() {
                fullscreenView.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        }
        
        // Close fullscreen when clicking outside image
        fullscreenView.addEventListener('click', function(e) {
            if (e.target === fullscreenView) {
                fullscreenView.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Touch swipe for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        mainImageContainer.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        mainImageContainer.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                // Swipe left - go to next
                const newIndex = (currentIndex + 1) % totalImages;
                changeMainImage(newIndex);
            }
            
            if (touchEndX > touchStartX + 50) {
                // Swipe right - go to previous
                const newIndex = (currentIndex - 1 + totalImages) % totalImages;
                changeMainImage(newIndex);
            }
        }
        
        // Animation on load
        setTimeout(() => {
            mainImage.classList.add('animate');
        }, 300);
    });
    
    </script>