const wpcf7Elm = document.querySelector(".wpcf7");
const notificationEl = document.getElementById("notification");
const telInputEl = document.getElementById("contactPhone");
const nameInputEl = document.getElementById("contactName");

if (wpcf7Elm) {
	wpcf7Elm.addEventListener(
		"wpcf7mailsent",
		event => {
			getNotification();
			const form = event.target;
			form.reset();
		},
		false,
	);
}

function getNotification() {
	notificationEl.classList.remove("visually-hidden");
	setTimeout(() => {
		notificationEl.classList.add("visually-hidden");
	}, 4000);
}

if (nameInputEl) {
	nameInputEl.addEventListener("keyup", function () {
		nameInputEl.value = nameInputEl.value.replace(/\d/g, "");
	});
}

if (telInputEl) {
	telInputEl.addEventListener("keyup", function () {
		telInputEl.value = telInputEl.value.replace(/[^\d?^\+]/g, "");
	});
}
