 // Wait until the DOM is fully loaded
 document.addEventListener("DOMContentLoaded", function() {
    // Select the form and add the submit event listener
    const form = document.getElementById("suggestionForm");
    form.addEventListener("submit", function(event) {
      // Prevent form from submitting by default
      event.preventDefault();
      
      // Run validation
      if (validateForm()) {
        form.submit(); // Submit the form if validation passes
      }
    });
  });


function validateForm() {
    // Get form fields
    const title = document.getElementById("title").value.trim();
    const description = document.getElementById("description").value.trim();
    
    // Error message elements
    const titleError = document.getElementById("titleError");
    const descriptionError = document.getElementById("descriptionError");
    const success = document.getElementById("success");

    // Reset error messages
    titleError.textContent = "";
    descriptionError.textContent = "";
    success.textContent = ""


    let isValid = true;

    // Validate title (optional, but minimum 3 characters if filled)
    if ( title.length < 3) {
      titleError.textContent = "Title must be at least 3 characters long.";
      success.textContent = ""

      isValid = false;
    }

    // Validate description (required)
    if (!description) {
      descriptionError.textContent = "Description is required.";
      success.textContent = ""

      isValid = false;
    }

    
    if (title !== "" && description !== "") {
        success.textContent = "We've Received Your Suggestion Thank You"
        descriptionError.textContent = "";
        titleError.textContent = "";
      
      isValid = false;


    }
    
    

    }
