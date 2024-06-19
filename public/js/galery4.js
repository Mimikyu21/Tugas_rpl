// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the cancel button
var cancelBtn = document.querySelector(".btn-cancel");

// Get the file input and the file name display container
var uploadFileInput = document.getElementById("uploadFile");
var fileNameDisplayContainer = document.getElementById("fileNameDisplay");
var uploadPlaceholder = document.getElementById("uploadPlaceholder");
var uploadIcons = document.getElementById("uploadIcons");
var uploadInstruction = document.getElementById("uploadInstruction");

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

// When the user selects a file, update the display with the file name
uploadFileInput.onchange = function(event) {
    var file = event.target.files[0];
    if (file) {
        fileNameDisplayContainer.textContent = file.name;
        fileNameDisplayContainer.style.display = "block";
        uploadIcons.style.display = "none";
        uploadInstruction.style.display = "none";
    }
}