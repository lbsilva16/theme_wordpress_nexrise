(function ($) {
	const $wrap = $('[data-dropdown].mobile-utilities');
	if (!$wrap.length) return;

	const $btn = $wrap.find('.mobile-utilities__toggle');
	const $menu = $wrap.find('#mobile-utilities-menu');

	function openMenu() {
		$btn.attr('aria-expanded', 'true');
		$menu.removeAttr('hidden');
	}

	function closeMenu() {
		$btn.attr('aria-expanded', 'false');
		$menu.attr('hidden', '');
	}

	function toggleMenu() {
		const expanded = $btn.attr('aria-expanded') === 'true';
		expanded ? closeMenu() : openMenu();
	}

	$btn.on('click', function (e) {
		e.preventDefault();
		toggleMenu();
	});

	// Fechar no clique fora
	$(document).on('click', function (e) {
		if (!$wrap.is(e.target) && $wrap.has(e.target).length === 0) {
			closeMenu();
		}
	});

	// Fechar com tecla Esc
	$(document).on('keydown', function (e) {
		if (e.key === 'Escape') closeMenu();
	});
})(jQuery);


