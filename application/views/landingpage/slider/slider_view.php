<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul_besar ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #000;
            cursor: pointer; /* Menunjukkan bahwa halaman bisa diklik */
        }

        .slider-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 1000;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-slide img {
            object-fit: contain;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="slider-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach($slider as $slide): ?>
                    <div class="swiper-slide">
                        <img src="<?= base_url('assets/image_slider/' . $slide->image) ?>" alt="Slider Image">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let swiper = new Swiper('.swiper', {
                effect: 'creative',
                creativeEffect: {
                    prev: { translate: ['-100%', 0, -1] },
                    next: { translate: ['100%', 0, 0] },
                },
                speed: 1000,
                loop: true,
                autoplay: {
                    delay: 10000,
                    disableOnInteraction: false,
                }
            });

            function enterFullscreenMode() {
                const docEl = document.documentElement;
                if (!document.fullscreenElement) {
                    if (docEl.requestFullscreen) {
                        docEl.requestFullscreen();
                    } else if (docEl.webkitRequestFullscreen) {
                        docEl.webkitRequestFullscreen();
                    } else if (docEl.msRequestFullscreen) {
                        docEl.msRequestFullscreen();
                    }
                }
            }

            // Ketika halaman diklik, masuk fullscreen
            document.addEventListener('click', enterFullscreenMode);
        });
    </script>

</body>
</html>
