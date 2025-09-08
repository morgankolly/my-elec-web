
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


        // Simple video slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const videoButtons = document.querySelectorAll('.video-slider-nav button');
            const videoContainer = document.querySelector('.video-container iframe');
            
            const videos = [
                'https://www.youtube.com/embed/9xwazD5SyVg',
                'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'https://www.youtube.com/embed/jNQXAC9IVRw'
            ];
            
            videoButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    // Update active button
                    videoButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    
                    // Change video
                    videoContainer.src = videos[index];
                });
            });
        });

            document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                // Basic validation
                if (!email || !password) {
                    showError('Please fill in all fields');
                    return;
                }
                
                if (!isValidEmail(email)) {
                    showError('Please enter a valid email address');
                    return;
                }
                
                // Simulate login process
                simulateLogin(email, password);
            });
            
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            function showError(message) {
                // Remove any existing error messages
                removeError();
                
                // Create error element
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = 'red';
                errorDiv.style.marginBottom = '15px';
                errorDiv.style.padding = '10px';
                errorDiv.style.backgroundColor = '#ffeeee';
                errorDiv.style.border = '1px solid #ffdddd';
                errorDiv.style.borderRadius = '5px';
                errorDiv.textContent = message;
                
                // Insert error message
                loginForm.insertBefore(errorDiv, loginForm.firstChild);
                
                // Remove error after 5 seconds
                setTimeout(removeError, 5000);
            }
            
            function removeError() {
                const existingError = document.querySelector('.error-message');
                if (existingError) {
                    existingError.remove();
                }
            }
            
            function simulateLogin(email, password) {
                // Show loading state
                const loginButton = document.querySelector('.login-button');
                const originalText = loginButton.textContent;
                loginButton.textContent = 'Logging in...';
                loginButton.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // For demo purposes, assume login is successful
                    // In a real application, you would make an API call to your server
                    showSuccess('Login successful! Redirecting...');
                    
                    // Redirect to dashboard after successful login
                    setTimeout(() => {
                        window.location.href = 'dashboard.html'; // Change to your actual dashboard URL
                    }, 1500);
                    
                    // Reset button (in case of error you would do this in the error handler)
                    loginButton.textContent = originalText;
                    loginButton.disabled = false;
                }, 1500);
            }
            
            function showSuccess(message) {
                removeError();
                
                const successDiv = document.createElement('div');
                successDiv.className = 'success-message';
                successDiv.style.color = 'green';
                successDiv.style.marginBottom = '15px';
                successDiv.style.padding = '10px';
                successDiv.style.backgroundColor = '#eeffee';
                successDiv.style.border = '1px solid #ddffdd';
                successDiv.style.borderRadius = '5px';
                successDiv.textContent = message;
                
                loginForm.insertBefore(successDiv, loginForm.firstChild);
                
                setTimeout(() => {
                    successDiv.remove();
                }, 5000);
            }
            
            // Add click events for social login buttons (for demonstration)
            document.querySelectorAll('.social-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const platform = this.classList.contains('facebook') ? 'Facebook' : 
                                    this.classList.contains('google') ? 'Google' : 'Twitter';
                    alert(`Redirecting to ${platform} login...`);
                });
            });
        });