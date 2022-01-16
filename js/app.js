window.addEventListener('mouseup', function (event) {
	var searchbox = document.querySelector('.search-box');
	var toggleMenu = document.querySelector('.menu');

	/*search box*/
	const searchToggle = document.querySelector('.toggle');
	const search = document.querySelector('.search-box');

	/*nav box*/
	const navToggle = document.querySelector('#menu-toggle-btn');
	const menu = document.querySelector('.menu');

	if (event.target != searchbox && event.target.parentNode != searchbox) {
		searchbox.classList.add('s-hide');
		searchToggle.addEventListener('click', function () {
			if (search.classList.contains('s-hide')) {
				search.classList.remove('s-hide');
			} else {
				search.classList.add('s-hide');
			}
		});
	}

	if (event.target != toggleMenu && event.target.parentNode != toggleMenu) {
		toggleMenu.classList.add('hide');
		navToggle.addEventListener('click', function () {
			if (menu.classList.contains('hide')) {
				menu.classList.remove('hide');
			} else {
				menu.classList.add('hide');
			}
		});
	}
});
