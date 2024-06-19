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