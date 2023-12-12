const ids = document.querySelectorAll("[id]");
const idArr = [];
Array.prototype.forEach.call(ids, function (el, i) {
	idArr.push(el.id);
});

if (idArr.includes("pagination")) {
	const paginationWrap = document.getElementById("pagination");

	if (paginationWrap.children.length > 0) {
		paginationWrap.classList.add("pagination");
	}
}
