/*search box*/
const searchToggle = document.querySelector('.toggle');
const search = document.querySelector('.search-box');

searchToggle.addEventListener('click', function () {
	if (search.classList.contains('s-hide')) {
		search.classList.remove('s-hide');
	} else {
		search.classList.add('s-hide');
	}
});

/*nav box*/
const navToggle = document.querySelector('#menu-toggle-btn');
const menu = document.querySelector('.menu');

navToggle.addEventListener('click', function () {
	if (menu.classList.contains('hide')) {
		menu.classList.remove('hide');
	} else {
		menu.classList.add('hide');
	}
});
