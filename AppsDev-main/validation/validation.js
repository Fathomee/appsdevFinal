const classrooms = document.querySelectorAll(".green");
const dialog = document.getElementById("dialog");
const timerDialog = document.getElementById("timer-dialog");
const close = document.querySelector(".close-button");
const submits = document.querySelector(".submits");
const inputField = document.querySelector('input[type="tel"]');
const form = document.querySelector(".form");
const submittedSvg = document.querySelector(".submits-svg");
const closedSvg = document.querySelector(".close-svg");
const send = document.querySelector(".send");

classrooms.forEach((classroom) => {
  classroom.addEventListener("click", () => {
    dialog.showModal();
  });
});

close.addEventListener("click", () => {
  dialog.close();
});

submits.addEventListener("click", () => {
  setTimeout(() => {
    timerDialog.showModal();
  }, 500);
});

form.addEventListener("submit", function (event) {
  event.preventDefault();
  document.querySelector('input[type="tel"]').value = "";
});

submits.disabled = true;

inputField.addEventListener("input", function (event) {
  submits.disabled = !event.target.value.trim();
});

form.addEventListener("submit", function (event) {
  event.preventDefault();
  inputField.value = "";
  submits.disabled = true;
});

submittedSvg.addEventListener("click", () => {
  submittedSvg.classList.toggle("submitted-svg");
  closedSvg.classList.toggle("closed-svg");
});

send.addEventListener("click", () => {
  dialog.close();
  timerDialog.close();
});



