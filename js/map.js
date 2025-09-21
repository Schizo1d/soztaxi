// Инициализация карты
var map = L.map('map').setView([50.55, 137.0], 13); // Координаты Комсомольска-на-Амуре

// Добавить OSM слой
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '© OpenStreetMap contributors',
}).addTo(map);

// Включить dragging и zoom
map.dragging.enable();
map.touchZoom.enable();
map.doubleClickZoom.enable();
map.scrollWheelZoom.enable();
