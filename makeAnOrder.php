<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сделать заказ</title>
  <link rel="stylesheet" href="css/makeAnOrder.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>
<body>
  <div class="container">
  <header>
      <div class="logo"><img src="img/logo.png" alt=""></div>
      <nav>
        <a href="/">Главная</a>
        <a href="/makeAnOrder.php" class="active">Сделать заказ</a>
        <a href="#">Средства поддержки</a>
        <a href="#">Услуги</a>
        <a href="#">Контакты</a>
        <a href="#">О нас</a>
      </nav>
      <div class="phone">+7 (999) 123-45-67</div>
  </header>
</div>

<div class="container map-container-flex">
  <div class="map-container-flex">
    <div class="map-container" id="map"></div>
      <div class="service-card_flex">
          <div class="service-card">
            <div class="service-header">
              <span class="step">1</span>
              <h3>Вид перевозки</h3>
              <div class="city-select">
                <div class="city-select__selected">г. Комсомольск-на-Амуре <img src="img/arrow.svg" alt=""></div>
                <div class="city-select__options">
                  <div class="city-select__option">г. Комсомольск-на-Амуре</div>
                  <div class="city-select__option">г. Хабаровск</div>
                </div>
              </div>
            </div>

            <div class="service-options">
              <div class="option" 
              data-desc="Перевозка пассажиров по городу от адреса к адресу с помощью персонала при подъёме и спуске для комфортного и безопасного перемещения.">
            <img src="img/city.png" alt="Город">
            <h4>Город</h4>
            <p>В черте города</p>
          </div>

          <div class="option" 
              data-desc="Перевозка пассажиров от места отправления до транспортных узлов, включая аэропорты, железнодорожные и автобусные вокзалы, при необходимости с оказанием физической помощи персонала сервиса.">
            <img src="img/placeOfDeparture.png" alt="Места отбытия">
            <h4>Места отбытия</h4>
            <p>Аэропорт, вокзал</p>
          </div>

          <div class="option" 
              data-desc="Перевозка пассажиров в отдалённые районы, области и небольшие населённые пункты, включая деревни и сёла, осуществляется при наличии подходящего транспорта и пригодных дорог.">
            <img src="img/сountryside.png" alt="Загород">
            <h4>Загород</h4>
            <p>Район, область</p>
          </div>

          <div class="option" 
              data-desc="Перевозка пассажира с сопровождением до кабинета и обратно, с физической помощью при необходимости; ожидание свыше часа оплачивается дополнительно.">
            <img src="img/medicalInstitution.png" alt="Мед. учрежд.">
            <h4>Мед. учрежд.</h4>
            <p>Больницы и т.д.</p>
          </div>
        </div>

        <p class="service-desc">
          Пожалуйста, выберите наиболее подходящий для ваших целей вариант перевозки, 
          чтобы мы могли обеспечить максимально удобное и комфортное сопровождение 
          в соответствии с вашими потребностями.
        </p>
      </div>
      
      <div class="service-card">
        <div class="service-header__flex">
          <div class="service-header">
            <span class="step">2</span>
            <h3>Адрес:</h3>
            <div class="toggles">
              <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
                <span class="label-text">Срочно! (≈30min)</span>
              </label>
              <label class="switch reverse-switch">
                <input type="checkbox">
                <span class="slider"></span>
                <span class="label-text">Туда-обратно</span>
                <img src="img/reverse.svg" alt="reverse" class="reverse-icon">
              </label>
            </div>
          </div>
          
          <div class="address-form">
            <div class="address-form input-with-dot dot-red">
                <input type="text" placeholder="Откуда*">
            </div>
            <div class="extra">
                <div class="input-wrapper">
                  <input type="text" id="entrance" placeholder=" " required>
                  <label for="entrance">Подъезд</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="intercom" placeholder=" " required>
                  <label for="intercom">Домофон/код</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="floor" placeholder=" " required>
                  <label for="floor">Этаж</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="apartment" placeholder=" " required>
                  <label for="apartment">Квартира</label>
                </div>
            </div>
          </div>
        </div>
        <div class="service-header__flex">
          <div class="service-header">
            <span class="step">3</span>
            <h3>Адрес, город или район:</h3>
          </div>
          <div class="address-form">
            <div class="address-form input-with-dot dot-purple">
                <input type="text" placeholder="Куда*">
            </div>
            <div class="extra">
                <div class="input-wrapper">
                  <input type="text" id="entrance" placeholder=" " required>
                  <label for="entrance">Подъезд</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="intercom" placeholder=" " required>
                  <label for="intercom">Домофон/код</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="floor" placeholder=" " required>
                  <label for="floor">Этаж</label>
                </div>

                <div class="input-wrapper">
                  <input type="text" id="apartment" placeholder=" " required>
                  <label for="apartment">Квартира</label>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="service-card">
        <div class="service-header">
          <span class="step">4</span>
          <h3>Контактная информация</h3>
        </div>
        <div class="contact-form">

        <div class="name-phone-container">
                <!-- Имя -->
                <div class="input-with-icon">
                  <img src="img/input_people.png" alt="">
                  <input type="text" placeholder="Имя*">
                </div>

                <!-- Телефон -->
                <div class="input-with-icon">
                  <img src="img/phone.png" alt="">
                  <input type="tel" placeholder="Телефон*">
                </div>
        </div>

          <!-- Вес пассажира -->
          <div class="input-with-icon grid-span-1">
            <img src="img/Kg.png" alt="">
            <input type="number" placeholder="Вес пассажира (кг)*">
          </div>

          <!-- Время -->
          <div class="input-with-icon">
            <img src="img/time.png" alt="">
            <input type="text" placeholder="Время*" onfocus="this.type='time'" onblur="if(!this.value) this.type='text'">
          </div>

          <!-- Дата -->
          <div class="input-with-icon">
            <img src="img/date.png" alt="">
            <input type="text" placeholder="Дата*" onfocus="this.type='date'" onblur="if(!this.value) this.type='text'">
          </div>

          <!-- Комментарий -->
          <div class="input-with-icon grid-span-3">
            <img src="img/comment.png" alt="">
            <textarea placeholder="Комментарий водителю"></textarea>
          </div>
        </div>
      </div>

      <div class="service-card">
        <div class="service-header">
          <span class="step">5</span>
          <h3>Возраст пассажира</h3>
        </div>
        <div class="age-options">
          <a href="#" class="age-btn">
            <h4>Ребёнок</h4>
            <p>до 18 лет</p>
            <img src="img/child.png" alt="Ребёнок">
          </a>
          <a href="#" class="age-btn">
            <h4>Взрослый</h4>
            <p>от 18 лет</p>
            <img src="img/adult.png" alt="Взрослый">
          </a>
          <a href="#" class="age-btn">
            <h4>В возрасте</h4>
            <p>от 60 лет</p>
            <img src="img/Aged.png" alt="Пожилой">
          </a>
        </div>
      </div>
      <div class="service-card">
      <button class="order-btn">Заказать</button>
    </div> 
    </div> 
  </div>
</div>


<div class="footer-top">
  <div class="footer-top-left">
    <img src="img/phone_footer_goodWorks.png" alt="Телефон" draggable="false" class="footer-phone-img">
    <div class="footer-info">
      <h2><span class="yellow">Добро</span> всегда <br> под рукой!</h2>
      <p>Используйте сервис — удобство и комфорт всегда с вами, где бы вы ни находились.</p>
      <a href="#" class="install-btn">Установить сервис <img src="img/install.png" alt=""></a>
    </div>
  </div>

  <div class="footer-top-right">
    <div class="contact-card">
      <h3>Адрес:</h3>
      <p>г. Комсомольск-на-Амуре, пр. Мира, д. 15, офис 301</p>
    </div>
    <div class="contact-card">
      <h3>Телефон:</h3>
      <p>+7 (999) 999-99-99</p>
    </div>
    <div class="contact-card">
      <h3>E-mail:</h3>
      <p>help@dobroe-taxi-kms.ru</p>
    </div>
  </div>
</div>

<div class="container">
<footer>
    <div class="footer-left">
      <a href="#">Политика конфиденциальности</a>
      <a href="#">Обработка персональных данных</a>
      <a href="#">Пользовательское соглашение</a>
    </div>
    <div class="footer-right">
      <span style="text-align: right;">Разработка <br>сервиса</span>
      <img src="img/ZipLog.svg" alt="Логотип" class="footer-logo">
    </div>
</footer>
</div>
<script src="./js/citySelect.js" defer></script>
<script src="./js/placeSelect.js" defer></script>
<script src="./js/ageSelect.js" defer></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" defer></script>
<script src="./js/map.js" defer></script>
</body>
</html>