const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: ["us", "co", "in", "de"],
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
});

const info = document.querySelector(".alert-info");
const error = document.querySelector(".alert-error");

function process(event) {
  event.preventDefault();

  const phoneNumber = phoneInput.getNumber();

  info.style.display = "none";
  error.style.display = "none";
  const data = new URLSearchParams();
  data.append("phone", phoneNumber);

  fetch("./lookup", {
    method: 'POST',
    body: data
  })
  .then(response => response.json())
  .then(json => {
    if (json.success) {
      info.style.display = "";
      info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`
    } else {
      console.error(json.error);
      error.style.display = "";
      error.innerHTML = json.error;
    }
  })
  .catch(err => {
    error.style.display = "";
    error.innerHTML = `Something went wrong: ${err}`
  });
}

const form = document.getElementById("lookup");
form.addEventListener("submit", process);