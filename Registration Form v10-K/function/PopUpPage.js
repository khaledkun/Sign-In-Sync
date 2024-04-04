// Get the modal
var modal = document.getElementById("terms-popup");

// Get the elements behind the modal
 var blurElements = document.querySelectorAll(".blur-background");

// Get the link that opens the modal
 var link = document.querySelector(".terms-link");

// Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

// Function to toggle blur effect on background elements
 function toggleBlur() {
  blurElements.forEach(function(element) {
    element.classList.toggle("blur-background");
 });
}

// Function to open the modal with transition
function openModal() {
  modal.style.opacity = "1";
  modal.style.pointerEvents = "auto";
}

// When the user clicks on the link, open the modal with transition
link.onclick = function() {
  modal.style.display = "block";
  toggleBlur();
  setTimeout(openModal, 50); // Delay opening the modal to allow transition
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.opacity = "0";
  modal.style.pointerEvents = "none";
  toggleBlur();
  setTimeout(function() {
  modal.style.display = "none";
  }, 300); // Delay hiding the modal to allow transition
}

// When the user clicks anywhere outside of the modal or sign-up page content, close the modal
document.addEventListener('click', function(event) {
  if (!modal.contains(event.target) && event.target !== link && event.target !== span) {
    modal.style.opacity = "0";
    modal.style.pointerEvents = "none";
    toggleBlur();
    setTimeout(function() {
    modal.style.display = "none";
    }, 300); // Delay hiding the modal to allow transition
 }
});