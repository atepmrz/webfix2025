document.addEventListener('DOMContentLoaded', function () {
        const mainVideo = document.getElementById('mainVideo');
        const playlistItems = document.querySelectorAll('.playlist-item');

        playlistItems.forEach(item => {
            item.addEventListener('click', function () {
                const videoSrc = this.getAttribute('data-video');
                mainVideo.src = videoSrc;
                mainVideo.play();
            });
        });
    });