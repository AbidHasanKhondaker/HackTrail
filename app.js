const dropdown = document.querySelector('.header .navbar .navlist .dropdown');
const mobile_menu = document.querySelector('.header .navbar .navlist ul');
const menu_item = document.querySelectorAll('.header .navbar .navlist ul li a');
const header = document.querySelector('.header.container');

dropdown.addEventListener('click', () => {
	dropdown.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		dropdown.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});


function changePage1() {
	window.location.href = '/momo\'s_file/web_development.php';
}
function changePage2() {
	window.location.href = '/momo\'s_file/Django.php';
}
function changePage3() {
	window.location.href = '/momo\'s_file/appdevelop.php';
}
function changePage4() {
	window.location.href = '/momo\'s_file/blockchain.php';
}
function changePage5() {
	window.location.href = '/momo\'s_file/machine_learning.php';
}