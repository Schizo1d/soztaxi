const selects = document.querySelectorAll('.city-select');

selects.forEach(select => {
	const selected = select.querySelector('.city-select__selected');
	const optionsContainer = select.querySelector('.city-select__options');
	const optionsList = select.querySelectorAll('.city-select__option');

	selected.addEventListener('click', () => {
		const isOpen = select.classList.contains('open');
		// Закрываем все остальные селекты
		document.querySelectorAll('.city-select').forEach(s => s.classList.remove('open'));
		// Открываем/закрываем текущий
		if (!isOpen) {
			select.classList.add('open');
		} else {
			select.classList.remove('open');
		}
	});

	optionsList.forEach(option => {
		option.addEventListener('click', () => {
			selected.textContent = option.textContent;
			select.classList.remove('open');
		});
	});

	document.addEventListener('click', e => {
		if (!select.contains(e.target)) {
			select.classList.remove('open');
		}
	});
});
