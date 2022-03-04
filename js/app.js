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
	if (menu) {
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

if (searchbtn) {
	searchbtn.addEventListener('click', togglesearch, false);
}

//submenu toggle in mobile
const mobileheader = document.getElementsByClassName('mobile-header')[0];
if (mobileheader) {
	const mobilesearchbtn =
		mobileheader.getElementsByClassName('search-btn')[0];
	const mobilemenubtn =
		mobileheader.getElementsByClassName('menu-toggle-btn')[0];

	if (mobilesearchbtn) {
		mobilesearchbtn.addEventListener('click', togglemobilesearch, false);
	}
	if (mobilemenubtn) {
		mobilemenubtn.addEventListener('click', togglemobilemenu, false);
	}

	function togglemobilesearch(event) {
		const searchform = mobileheader.getElementsByClassName('search-box')[0];
		const menucontainer =
			mobileheader.getElementsByClassName('menu-container')[0];
		const menuobjects = menucontainer.getElementsByClassName('menu');
		if (menuobjects.length > 0) {
			menuobjects[0].classList.add('hide');
		}
		if (searchform.classList.contains('s-hide')) {
			searchform.classList.remove('s-hide');
		} else {
			searchform.classList.add('s-hide');
		}
	}

	function togglemobilemenu(event) {
		const menucontainer =
			mobileheader.getElementsByClassName('menu-container')[0];
		const menuobjects = menucontainer.getElementsByClassName('menu');
		const searchform = mobileheader.getElementsByClassName('search-box')[0];
		searchform.classList.add('s-hide');
		if (menuobjects.length > 0) {
			if (menuobjects[0].classList.contains('hide')) {
				menuobjects[0].classList.remove('hide');
			} else {
				menuobjects[0].classList.add('hide');
			}
		}
	}
}

w = screen.width;

const parents = document.getElementsByClassName('menu-item-has-children');

for (var i = 0; i < parents.length; i++) {
	parents[i].addEventListener('click', toggleSubMenu, false);
	var anchort = parents[i].querySelector('a');
	if (anchort) {
		anchort.addEventListener('focus', focusSubmenuopener, false);
	}
}

// keyboard navigation
function focusSubmenuopener(event) {
	if (w > 768) {
		return;
	}
	var parentElement = event.target.parentNode;
	var submenu = parentElement.querySelector('.sub-menu');
	if (submenu) {
		submenu.style.display = 'block';
	}
}

function toggleSubMenu(event) {
	console.log('triggered');
	var targetElement = event.target || event.srcElement;
	var child = targetElement.getElementsByClassName('sub-menu')[0];
	if (!child) {
		return;
	}
	if (w < 768) {
		if (child.style.display == 'none' || child.style.display == '') {
			child.style.display = 'block';
		} else if (child.style.display == 'block') {
			child.style.display = 'none';
		} else {
			child.style.display = 'none';
		}
	}
}

var totop = document.getElementById('totop');
if (totop) {
	function scrollFunction() {
		if (
			document.body.scrollTop > 150 ||
			document.documentElement.scrollTop > 150
		) {
			totop.style.display = 'grid';
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

var lastScrollTop = 0;
if (
	document.querySelector('.grg-sticky-header') &&
	document.querySelector('.grg-desktop-sticky-header') &&
	screen.width >= 769 &&
	document.getElementById('masthead') &&
	document.querySelector('.desktop-nav')
) {
	const headerinitialheight =
		document.querySelector('.desktop-nav').clientHeight;
	function shrink() {
		var st = window.pageYOffset || document.documentElement.scrollTop;
		if (
			document.body.scrollTop > 0 ||
			document.documentElement.scrollTop > 0
		) {
			document.querySelector('.desktop-nav').style.minHeight = '65px';
			document.getElementById('masthead').style.minHeight =
				headerinitialheight.toString() + 'px';
			document.querySelector('.desktop-nav').style.position = 'fixed';
			document.querySelector('.desktop-nav').style.borderBottom = 'none';
			document.querySelector('.desktop-nav').style.boxShadow =
				'0px 0px 5px 5px #0000001f';
		} else {
			if (st <= lastScrollTop) {
				document.querySelector('.desktop-nav').style.minHeight = null;
				document.querySelector('.desktop-nav').style.position =
					'relative';
				document.querySelector('.desktop-nav').style.borderBottom =
					'1px solid #aaaaaa';
				document.querySelector('.desktop-nav').style.boxShadow = 'none';
			} else {
				document.querySelector('.desktop-nav').style.minHeight = null;
				document.getElementById('masthead').style.minHeight = null;
				document.querySelector('.desktop-nav').style.position =
					'relative';
			}
		}
		lastScrollTop = st <= 0 ? 0 : st;
	}
	window.onscroll = function () {
		shrink();
	};
}

if (
	document.querySelector('.grg-sticky-header') &&
	document.querySelector('.grg-mobile-sticky-header') &&
	screen.width < 769 &&
	document.getElementById('masthead') &&
	document.querySelector('.top-part') &&
	document.querySelector('.mobile-header')
) {
	const headerinitialheight =
		document.querySelector('.top-part').clientHeight;
	function mobileshrink() {
		var st = window.pageYOffset || document.documentElement.scrollTop;
		if (
			document.body.scrollTop > 0 ||
			document.documentElement.scrollTop > 0
		) {
			document.querySelector('.top-part').style.minHeight = '100px';
			document.getElementById('masthead').style.minHeight =
				headerinitialheight.toString() + 'px';
			document.querySelector('.mobile-header').style.position = 'fixed';
			if (document.querySelector('#wpadminbar')) {
				var offset =
					document.querySelector('#wpadminbar').clientHeight - st;
				if (offset < 0) {
					offset = 0;
				}
				document.querySelector('.mobile-header').style.top =
					offset.toString() + 'px';
			}
		} else {
			if (st <= lastScrollTop) {
				document.querySelector('.top-part').style.minHeight = null;
				document.querySelector('.mobile-header').style.position =
					'relative';
				if (document.querySelector('#wpadminbar')) {
					document.querySelector('.mobile-header').style.top = null;
				}
			} else {
				document.querySelector('.top-part').style.minHeight = null;
				document.getElementById('masthead').style.minHeight = null;
				document.querySelector('.mobile-header').style.position =
					'relative';
			}
		}
		lastScrollTop = st <= 0 ? 0 : st;
	}
	window.onscroll = function () {
		mobileshrink();
	};
}
