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
	if(menu){
		menu.classList.add('hide');
	}
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
const mobileheader = document.getElementsByClassName('mobile-header')[0];
const mobilesearchbtn = mobileheader.getElementsByClassName('search-btn')[0];
const mobilemenubtn = mobileheader.getElementsByClassName('menu-toggle-btn')[0];

mobilesearchbtn.addEventListener('click', togglemobilesearch, false);
if(mobilemenubtn){
	mobilemenubtn.addEventListener('click', togglemobilemenu, false);
}


function togglemobilesearch(event){
	const searchform = mobileheader.getElementsByClassName('search-form')[0];
	const menucontainer = mobileheader.getElementsByClassName('menu-container')[0];
	const menuobjects = menucontainer.getElementsByClassName('menu');
	if(menuobjects.length > 0){
		menuobjects[0].classList.add('hide');
	}
	if(searchform.style.display == 'none'){
		searchform.style.display = 'block';
	}
	else{
		searchform.style.display = 'none';
	}

}

function togglemobilemenu(event){
	const menucontainer = mobileheader.getElementsByClassName('menu-container')[0];
	const menuobjects = menucontainer.getElementsByClassName('menu');
	const searchform = mobileheader.getElementsByClassName('search-form')[0];
	searchform.style.display = 'none';
	if(menuobjects.length>0){
		if(menuobjects[0].classList.contains('hide')){
			menuobjects[0].classList.remove('hide');
		}
		else{
			menuobjects[0].classList.add('hide');
		}
	}
}

// w = screen.width;

// const parents = document.getElementsByClassName('menu-item-has-children');


// for (var i = 0; i < parents.length; i++) {
// 	parents[i].addEventListener('click', toggleSubMenu, false);
// }

// function toggleSubMenu(event) {
// 	var targetElement = event.target || event.srcElement;
// 	var child = targetElement.getElementsByClassName('sub-menu')[0];
// 	console.log(child.style.display);

// 	if (w < 768) {
// 		if (child.style.display == 'none' || child.style.display == '') {
// 			child.style.display = 'block';
// 		} else {
// 			child.style.display = 'none';
// 		}
// 	}
// }

var totop = document.getElementById('totop');
if (totop) {
	function scrollFunction() {
		if (
			document.body.scrollTop > 150 ||
			document.documentElement.scrollTop > 150
		) {
			totop.style.display = 'block';
		} else {
			totop.style.display = 'none';
		}
	}

	scrollFunction();

	window.onscroll = function () {
		scrollFunction();
	};
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

/*toc*/
const tocToggle = document.querySelector('.toggle-toc');
const heading = document.querySelector('.heading');

if (tocToggle) {
	tocToggle.addEventListener('click', function () {
		if (heading.classList.contains('show-links')) {
			heading.classList.remove('show-links');
			document.querySelector('.toggle-toc').innerHTML = 'hide';
		} else {
			heading.classList.add('show-links');
			document.querySelector('.toggle-toc').innerHTML = 'show';
		}
	});
}

function setCookie(name, value, days) {
	var expires = '';
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
		expires = '; expires=' + date.toUTCString();
	}
	document.cookie = name + '=' + (value || '') + expires + '; path=/';
}
function getCookie(name) {
	var nameEQ = name + '=';
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}
function eraseCookie(name) {
	document.cookie =
		name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
/*cookie*/
const cookieToggle = document.querySelector('.cookie-btn');
const notice = document.querySelector('.cookie');

if (notice) {
	var x = getCookie('grg_cookie_flag');
	if (x) {
		if (x != '1') {
			notice.style.display = 'flex';
			cookieToggle.addEventListener('click', function () {
				notice.style.display = 'none';
				setCookie('grg_cookie_flag', '1', 30);
			});
		}
	} else {
		notice.style.display = 'flex';
		cookieToggle.addEventListener('click', function () {
			notice.style.display = 'none';
			setCookie('grg_cookie_flag', '1', 30);
		});
	}
}
