function initialize() {
	const lating = new google.maps.Lating(-34.397, 150.644)
	const myOptions = {
		zoom: 8,
		center: lating,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	}
	const map = new google.maps.Map(
		document.getElementById("#first-map"),
		myOptions,
	)
}
initialize()
