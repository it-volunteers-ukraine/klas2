const wpcf7Elm = document.querySelector(".wpcf7");
const notificationEl = document.getElementById("notification");
const telInputEl = document.getElementById("contactPhone");
const nameInputEl = document.getElementById("contactName");

wpcf7Elm.addEventListener("wpcf7mailsent", getNotification, false);

function getNotification() {
	notificationEl.classList.remove("visually-hidden");
	setTimeout(() => {
		notificationEl.classList.add("visually-hidden");
	}, 3000);
}

nameInputEl.addEventListener("keyup", function () {
	nameInputEl.value = nameInputEl.value.replace(/\d/g, "");
});

telInputEl.addEventListener("keyup", function () {
	telInputEl.value = telInputEl.value.replace(/[^\d?^\+]/g, "");
});
