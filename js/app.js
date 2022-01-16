/*navbar*/
const searchToggle = document.querySelector('.toggle');
const search = document.querySelector('.search-box');

searchToggle.addEventListener('click', function () {
	if (search.classList.contains('hide')) {
		search.classList.remove('hide');
	} else {
		search.classList.add('hide');
	}
});
