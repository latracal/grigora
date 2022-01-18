window.addEventListener('mouseup', function (event) {
	var toggleMenu = document.querySelector('.menu');

	/*search box*/
	const searchbox = document.querySelector('.search-box');
	var searchbtn = document.querySelector('.search-btn');
	var searchbtnobj = document.querySelector('.search-btn-obj');
	var searchbtnsvg = document.querySelector('.search-btn-svg');

	/*navbar*/
	const menu = document.querySelector('.menu');
	var menubtn = document.querySelector('.menu-toggle-btn');
	var menuicon = document.querySelector('.menu-toggle-icon');

	console.log(event.target);

	if (
		event.target == searchbtn ||
		event.target == searchbtnobj ||
		event.target == searchbtnsvg
	) {
		menu.classList.add('hide');
		if (searchbox.classList.contains('s-hide')) {
			searchbox.classList.remove('s-hide');
		} else {
			searchbox.classList.add('s-hide');
		}
	} else if (menubtn.contains(event.target)) {
		searchbox.classList.add('s-hide');
		if (menu.classList.contains('hide')) {
			menu.classList.remove('hide');
		} else {
			menu.classList.add('hide');
		}
	} else if (event.target == searchbox || searchbox.contains(event.target)) {
	} else if (event.target == menu || menu.contains(event.target)) {
	} else {
		searchbox.classList.add('s-hide');
		menu.classList.add('hide');
	}
});

var parent = document.querySelector('.menu-item-has-children');
var subMenu = document.querySelector('.sub-menu');

parent.addEventListener('click', function () {
	if (subMenu.classList.contains('hide')) {
		subMenu.classList.remove('hide');
	} else {
		subMenu.classList.add('hide');
	}
});
