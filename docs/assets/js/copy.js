document.addEventListener("DOMContentLoaded", (event) => {
    /* Show copy code buttons */
    document.querySelectorAll(".button-code-copy").forEach((block) => {
      block.style.display = "block";
      
      block.addEventListener("click", function() {
          (navigator.clipboard || { writeText(value) { return Promise.rejected(); }}).writeText((this.previousSibling.innerText));
      });
    });
  }); 