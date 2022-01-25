function controlName(evt, control) {
	var i, customizer, tabbtn;

	customizer = document.getElementsByClassName('customizer');
	for (i = 0; i < customizer.length; i++) {
		customizer[i].style.display = 'none';
	}

	tabbtn = document.getElementsByClassName('tab-btn');
	for (i = 0; i < tabbtn.length; i++) {
		tabbtn[i].className = tabbtn[i].className.replace(' active', '');
	}

	document.getElementById(control).style.display = 'block';
	evt.currentTarget.className += ' active';
}

// Get the element with id="defaultOpen" and click on it
document.getElementById('default').click();
