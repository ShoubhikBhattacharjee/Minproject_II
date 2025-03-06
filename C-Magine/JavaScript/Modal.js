const modal = document.getElementById("myModal");
const popupTrigger = document.getElementById("popupTrigger");
const closeModal = document.getElementById("closeModal");

// Show modal when clicking the text
popupTrigger.addEventListener("click", function () {
  modal.style.display = "flex";
});

// Hide modal when clicking on the close button
closeModal.addEventListener("click", function () {
  modal.style.display = "none";
});

// Hide modal when clicking outside the modal-content area
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
