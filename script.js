/* script.js */

// Function to display a success message
function showSuccessMessage(message) {
    var successMessage = document.getElementById("success-message");
    successMessage.innerHTML = message;
    successMessage.style.display = "block";
  
    // Hide the success message after 3 seconds
    setTimeout(function() {
      successMessage.style.display = "none";
    }, 3000);
  }