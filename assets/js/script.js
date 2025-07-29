
        function openLightbox(imageId, captionText) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const caption = document.getElementById('caption');
            
            lightbox.style.display = 'flex';
            lightboxImage.src = document.getElementById(imageId).src;
            caption.innerHTML = captionText;
            
            // Prevent scrolling when lightbox is open
            document.body.style.overflow = 'hidden';
        }
        
        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            
            // Restore scrolling
            document.body.style.overflow = 'auto';
        }
        
        // Close lightbox when clicking outside the image
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
        
        // Close lightbox with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });