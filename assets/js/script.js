
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



    // Star Rating System
    document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', function() {
            const value = parseInt(this.getAttribute('data-value'));
            document.getElementById('rating-value').value = value;
            
            // Update star display
            document.querySelectorAll('.star').forEach((s, index) => {
                if (index < value) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
    });
    
    // Submit Review
    document.getElementById('submit-review').addEventListener('click', function() {
        const rating = document.getElementById('rating-value').value;
        const comment = document.getElementById('comment').value;
        
        if (rating === '0') {
            alert('Please select a rating');
            return;
        }
        
        if (!comment.trim()) {
            alert('Please enter your review');
            return;
        }
        
        // In a real implementation, you would send this data to your server
        alert('Thank you for your review!');
        document.getElementById('comment').value = '';
        document.getElementById('rating-value').value = '0';
        document.querySelectorAll('.star').forEach(star => {
            star.classList.remove('active');
        });
        
        // Here you would typically refresh the comments display with the new review
    });
    
    // Contact Form Submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        // Simple validation
        if (!name || !email || !subject || !message) {
            alert('Please fill in all fields');
            return;
        }
        
        // In a real implementation, you would send this data to your server
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });