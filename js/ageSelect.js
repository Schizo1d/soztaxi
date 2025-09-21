const ageButtons = document.querySelectorAll('.age-btn');

ageButtons.forEach(btn => {
	btn.addEventListener('click', e => {
		e.preventDefault(); // чтобы <a href="#"> не скроллил страницу
		// убираем active у всех
		ageButtons.forEach(b => b.classList.remove('active'));
		// добавляем active к нажатой
		btn.classList.add('active');
	});
});
