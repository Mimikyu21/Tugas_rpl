document.addEventListener('DOMContentLoaded', () => {
    // Get the modals
    const uploadModal = document.getElementById("uploadModal");
    const editModal = document.getElementById("editModal");
  
    // Get the buttons
    const uploadBtn = document.getElementById("openUploadModalBtn");
    const editButtons = document.querySelectorAll(".edit-review-button");
  
    // Get the cancel buttons
    const cancelBtns = document.querySelectorAll(".btn-cancel");
  
    // Open upload modal
    if (uploadBtn) {
      uploadBtn.onclick = function() {
        uploadModal.style.display = "block";
        document.body.style.overflow = "hidden";
      }
    }
  
    // Open edit modal
    editButtons.forEach(button => {
      button.addEventListener('click', function() {
        const reviewBox = this.closest('.review-box');
        const reviewText = reviewBox.querySelector('.client-comment p').textContent;
        const starElements = reviewBox.querySelectorAll('.fa-star');
        const rating = Array.from(starElements).filter(star => star.classList.contains('fas')).length;
  
        document.getElementById('editReviewText').value = reviewText;
        updateStars(rating, 'editRatingStars');
        editModal.style.display = "block";
        document.body.style.overflow = "hidden";
      });
    });
  
    // Close modals on cancel button click
    cancelBtns.forEach(btn => {
      btn.onclick = function() {
        uploadModal.style.display = "none";
        editModal.style.display = "none";
        document.body.style.overflow = "auto";
      }
    });
  
    // Close modals on outside click
    window.onclick = function(event) {
      if (event.target == uploadModal) {
        uploadModal.style.display = "none";
      }
      if (event.target == editModal) {
        editModal.style.display = "none";
      }
      document.body.style.overflow = "auto";
    }
  
    // Function to update star display for both modals
    function updateStars(rating, starContainerId) {
      const stars = document.querySelectorAll(`#${starContainerId} .fa-star`);
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
  
    // Add click event listeners to the stars for upload modal
    const uploadStars = document.querySelectorAll('#uploadRatingStars .fa-star');
    uploadStars.forEach((star, index) => {
      star.addEventListener('click', () => {
        updateStars(index + 1, 'uploadRatingStars');
      });
    });
  
    // Add click event listeners to the stars for edit modal
    const editStars = document.querySelectorAll('#editRatingStars .fa-star');
    editStars.forEach((star, index) => {
      star.addEventListener('click', () => {
        updateStars(index + 1, 'editRatingStars');
      });
    });
  });
  