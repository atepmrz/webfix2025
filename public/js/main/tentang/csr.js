function openModal(imgSrc, imgAlt) {
            const modalImg = document.getElementById('modalImage');
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modalImg.src = imgSrc;
            modalImg.alt = imgAlt;
            modal.show();
        }