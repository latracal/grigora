var toggleMenu = document.querySelector('.menu');

/*search box*/
const searchbox = document.querySelector('.search-box');
var searchbtn = document.querySelector('.search-btn');
var searchbtnobj = document.querySelector('.search-btn-obj');
var searchbtnsvg = document.querySelector('.search-btn-svg');
var searchinput = document.getElementsByClassName('search-field')[0];
var searchfield = document.querySelector('.search-field');
var searcharrowbutton = document.querySelector('.search-icon');
/*navbar*/
const menu = document.querySelector('.menu');
var menubtn = document.querySelector('.menu-toggle-btn');
var menuicon = document.querySelector('.menu-toggle-icon');

function togglesearch(event) {
	menu.classList.add('hide');
	if (searchinput.contains(event.target)) {
		return;
	}
	if (searchbox.classList.contains('s-hide')) {
		searchbox.classList.remove('s-hide');
		searchinput.focus();
		searchinput.select();
		document.removeEventListener('click', clickoutsidesearchevent, false);
		document.addEventListener('click', clickoutsidesearchevent, false);
	} else {
		document.removeEventListener('click', clickoutsidesearchevent, false);
		searchbox.classList.add('s-hide');
	}
}

function clickoutsidesearchevent(event) {
	if (
		event.target == searchbox ||
		event.target == searchfield ||
		event.target == searcharrowbutton ||
		searchbtn.contains(event.target)
	) {
	} else {
		searchbox.classList.add('s-hide');
		document.removeEventListener('click', clickoutsidesearchevent, false);
	}
}

function clickoutsidemenuevent(event) {
	if (menu.contains(event.target) || menubtn.contains(event.target)) {
	} else {
		menu.classList.add('hide');
		document.removeEventListener('click', clickoutsidemenuevent, false);
	}
}

function togglemenu(event) {
	searchbox.classList.add('s-hide');
	// if(menu.contains(event.target)){
	// 	return;
	// }
	if (menu.classList.contains('hide')) {
		menu.classList.remove('hide');
		document.removeEventListener('click', clickoutsidemenuevent, false);
		document.addEventListener('click', clickoutsidemenuevent, false);
	} else {
		document.removeEventListener('click', clickoutsidemenuevent, false);
		menu.classList.add('hide');
	}
}

searchbtn.addEventListener('click', togglesearch, false);
menubtn.addEventListener('click', togglemenu, false);

//submenu toggle in mobile
w = screen.width;

const parent = document.querySelector('.menu-item-has-children');
const child = document.querySelector('.sub-menu');

parent.addEventListener('click', function () {
	if (w < 768) {
		child.style.display = 'block';
	} else {
		child.style.display = 'none';
	}
});
