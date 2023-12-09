(() => {
	var e;
	(e = jQuery).fn.moreLess = function (s) {
		var t = e.extend(
			{
				moreLabel: "Read more",
				lessLabel: "Read less",
				moreClass: "",
				lessClass: "",
				wordsCount: 50,
			},
			s,
		);
		function a(e, s) {
			var a = e.html().trim().split(/\s+/);
			a.length > t.wordsCount &&
				(a.splice(t.wordsCount, 9e9),
				a.push(
					'<a href="#" data-id="' +
						s +
						'" class="moreless-expand-content ' +
						t.moreClass +
						'">' +
						t.moreLabel +
						"</a>",
				)),
				e.html(new DOMParser().parseFromString(a.join(" "), "text/html").body.innerHTML);
		}
		var n = [],
			l = [];
		this.each(function (s) {
			var t = e(this);
			n.push(t.html()), l.push(t), a(t, s);
		}),
			e(document).on("click", ".moreless-expand-content", function (s) {
				s.preventDefault();
				var a = e(this).attr("data-id");
				l[a].html(
					n[a] +
						'<a href="#" data-id="' +
						a +
						'" class="moreless-collapse-content ' +
						t.lessClass +
						'">' +
						t.lessLabel +
						"</a>",
				);
			}),
			e(document).on("click", ".moreless-collapse-content", function (s) {
				s.preventDefault();
				var t = e(this).attr("data-id");
				a(l[t], t);
			});
	};
})();

jQuery(document).ready(function ($) {
	function updateTextHeight() {
		let wordsCount;
		let windowWidth = $(window).width();

		if (windowWidth >= 576 && windowWidth < 992) {
			wordsCount = 30;
		} else if (windowWidth < 576) {
			wordsCount = 10;
		} else {
			wordsCount = 60;
		}
		return wordsCount;
	}

	$(".project__description").moreLess({
		wordsCount: updateTextHeight(),
		moreLabel:
			'...<button class="button read-more_button read-more_button-mobile">Читати більше<svg class="arrow-icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.46967 5.46967C5.76256 5.17678 6.23744 5.17678 6.53033 5.46967L18.25 17.1893V6.52C18.25 6.10579 18.5858 5.77 19 5.77C19.4142 5.77 19.75 6.10579 19.75 6.52V19C19.75 19.4142 19.4142 19.75 19 19.75H6.52C6.10579 19.75 5.77 19.4142 5.77 19C5.77 18.5858 6.10579 18.25 6.52 18.25H17.1893L5.46967 6.53033C5.17678 6.23744 5.17678 5.76256 5.46967 5.46967Z" fill="#4E4E4E"/></svg></button>',
		lessLabel:
			'<button class="button read-less_button read-more_button read-more_button-mobile">Сховати<svg class="arrow-icon"><path d="M18 6L6 18" stroke="#070707" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 6L18 18" stroke="#070707" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
		moreClass: "more-link",
		lessClass: "less-link",
	});
});
