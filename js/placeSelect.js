document.querySelectorAll('.option').forEach(option => {
	option.addEventListener('click', () => {
		// Сначала убираем active у всех
		document.querySelectorAll('.option').forEach(o => o.classList.remove('active'));
		// Потом добавляем только на выбранный
		option.classList.add('active');
	});
});

const defaultText =
	'Пожалуйста, выберите наиболее подходящий для ваших целей вариант перевозки, чтобы мы могли обеспечить максимально удобное и комфортное сопровождение в соответствии с вашими потребностями.';

const serviceDesc = document.querySelector('.service-desc');
const options = document.querySelectorAll('.option');

options.forEach(option => {
	option.addEventListener('click', () => {
		// Убираем актив у всех
		options.forEach(o => o.classList.remove('active'));

		// Добавляем актив выбранному
		option.classList.add('active');

		// Меняем текст в описании
		const newDesc = option.dataset.desc || defaultText;
		serviceDesc.textContent = newDesc;
	});
});
