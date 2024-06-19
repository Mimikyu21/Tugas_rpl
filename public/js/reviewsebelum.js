// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the cancel button
var cancelBtn = document.querySelector(".btn-cancel");

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    document.body.style.overflow = "hidden"; // Disable scrolling
}

// When the user clicks on cancel button, close the modal
cancelBtn.onclick = function() {
    modal.style.display = "none";
    document.body.style.overflow = "auto"; // Enable scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Enable scrolling
    }
}

// Get the stars
var stars = document.querySelectorAll('#ratingStars .fa-star');
var rating = 0;

// Function to update star display
function updateStars(rating) {
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.remove('far');
            star.classList.add('fas');
        } else {
            star.classList.remove('fas');
            star.classList.add('far');
        }
    });
}

// Add click event listeners to the stars
stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        rating = index + 1; // Star rating is 1-indexed
        updateStars(rating);
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Assuming you have a timestamp for when the review was posted
    const reviewDate = new Date('2024-06-13T12:00:00'); // Example date
    const now = new Date();
    
    // Display the review date
    document.getElementById('review-date').textContent = reviewDate.toLocaleDateString();

    // Calculate the relative time
    const timeDifference = now - reviewDate;
    const timeAgo = getTimeAgo(timeDifference);
    
    document.getElementById('review-time').textContent = timeAgo;
    // Adjust all textareas to fit their content
    document.querySelectorAll('.comment-text').forEach(textarea => {
        adjustTextareaHeight(textarea);
    });

    // Add click event listener to document to reset review box when clicked outside
    document.addEventListener('click', function(event) {
        const reviewBoxes = document.querySelectorAll('.review-box');
        reviewBoxes.forEach(reviewBox => {
            if (!reviewBox.contains(event.target)) {
                resetReviewBox(reviewBox);
            }
        });
    });
});

function getTimeAgo(timeDifference) {
    const seconds = Math.floor(timeDifference / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);
    
    if (days > 0) return `${days} day${days > 1 ? 's' : ''} ago`;
    if (hours > 0) return `${hours} hour${hours > 1 ? 's' : ''} ago`;
    if (minutes > 0) return `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
    return 'just now';
}

// Buat edit text
document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("myModal");
    var editButtons = document.querySelectorAll(".edit-review-button");
    var reviewTextarea = document.getElementById("reviewUser");
    var stars = document.querySelectorAll('#ratingStars .fa-star');
    var rating = 0;

    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            var reviewBox = this.closest('.review-box');
            var reviewText = reviewBox.querySelector('.client-comment p').textContent;
            var starElements = reviewBox.querySelectorAll('.stars .fa-star');
            rating = Array.from(starElements).filter(star => star.classList.contains('fas')).length;
            
            reviewTextarea.value = reviewText;
            updateStars(rating);
            modal.style.display = "block";
            document.body.style.overflow = "hidden"; // Disable scrolling
        });
    });

    function updateStars(rating) {
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.remove('far');
                star.classList.add('fas');
            } else {
                star.classList.remove('fas');
                star.classList.add('far');
            }
        });
    }

    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            rating = index + 1; // Star rating is 1-indexed
            updateStars(rating);
        });
    });

    document.querySelector(".btn-cancel").onclick = function() {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Enable scrolling
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto"; // Enable scrolling
        }
    };
});
