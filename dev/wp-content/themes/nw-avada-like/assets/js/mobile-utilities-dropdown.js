(function () {
	var wrap = document.querySelector('[data-dropdown].mobile-utilities');
	if (!wrap) return;

	var btn = wrap.querySelector('.mobile-utilities__toggle');
	var menu = wrap.querySelector('#mobile-utilities-menu');
	if (!btn || !menu) return;

	function openMenu() {
		btn.setAttribute('aria-expanded', 'true');
		menu.removeAttribute('hidden');
	}

	function closeMenu() {
		btn.setAttribute('aria-expanded', 'false');
		menu.setAttribute('hidden', '');
	}

	function toggleMenu() {
		var expanded = btn.getAttribute('aria-expanded') === 'true';
		expanded ? closeMenu() : openMenu();
	}

	btn.addEventListener('click', function (e) {
		e.preventDefault();
		toggleMenu();
	});

	document.addEventListener('click', function (e) {
		if (!wrap.contains(e.target)) closeMenu();
	});

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') closeMenu();
	});
})();


