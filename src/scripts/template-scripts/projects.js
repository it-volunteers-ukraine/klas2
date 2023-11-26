document.addEventListener("DOMContentLoaded", function () {
	const tabs = document.querySelectorAll(".tab");
	const tabContents = document.querySelectorAll(".tab-content");

	tabs.forEach(tab => {
		tab.addEventListener("click", () => openTab(tab.dataset.target));
	});

	function openTab(tabId) {
		tabContents.forEach(content => {
			content.classList.remove("tab-active");
		});

		tabs.forEach(tab => {
			tab.classList.remove("tab-active");
		});

		const activeTab = document.getElementById(tabId);
		activeTab.classList.add("tab-active");

		const activeTabButton = document.querySelector(`[data-target="${tabId}"]`);
		activeTabButton.classList.add("tab-active");
	}

	openTab("tab1");
});
