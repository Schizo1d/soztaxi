<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добрые дела</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/adaptive.css">
</head>
<body>
  
    <header>
      <div class="container">
      <div class="header-top">
            <div class="header-left">
              <div class="header-left__logo-block">
                <img src="img/mainPage_logo.png" alt="Логотип" class="logo-img">
              </div>

              <div class="header-left__divider"></div>

              <div class="header-left__city-block">
                <span class="header-left__city-label">Ваш город:</span>
                <span class="header-left__city-name">Комсомольск-на-Амуре <img src="img/arrow.svg" alt="▼"></span>
              </div>
            </div>

            <div class="header-right">
              <a href="#" class="header-right__install-btn">Установить сервис <img src="img/install.png" alt=""></a>
              <div class="header-right__phone-block">
                <span class="header-right__small-text">Отвечаем быстро:</span>
                <span class="header-right__phone">+7 (999) 999-99-99</span>
              </div>
            </div>
          </div>

          <nav>
            <a href="/" class="active">Главная</a>
            <a href="/makeAnOrder.php">Сделать заказ</a>
            <a href="#">Средства поддержки</a>
            <a href="#">Услуги</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
          </nav>
      </div>    
    </header>
    <div class="container">
      <section class="help-block">
        <div class="help-block__content">
          <!-- Левая часть -->
          <div class="help-block__left">
            <h2>Помощь<br>в движении</h2>
            <p class="help-block__subtitle">Быстро, надёжно, с заботой.</p>
            <p class="help-block__text">
              Мы перевозим маломобильных граждан и сдаём в аренду коляски, ходунки и другие средства передвижения.<br><br>
              Для пожилых, людей после операций и тех, кому трудно передвигаться самостоятельно.
            </p>
            <a href="#" class="help-block__btn">Подробнее о нас</a>
            <img src="img/help-block__imageLeft.png" alt="Иллюстрация" class="help-block__image">
          </div>

          <!-- Правая часть -->
          <div class="help-block__right">
            <h3>Начните прямо сейчас — оформите заказ<br>в несколько кликов!</h3>

            <form class="help-form">
              <div class="form-group">
                <label for="from">Откуда*</label>
                <input type="text" id="from" placeholder="Адрес или место">
                <span class="error-text">Ошибка при вводе данных</span>
              </div>

              <div class="form-group">
                <label for="to">Куда*</label>
                <input type="text" id="to" placeholder="Адрес или место">
              </div>

              <div class="form-row">
                <input type="time" id="time">
                <input type="date" id="date">
              </div>

              <button type="submit" class="calc-btn">Рассчитать</button>
            </form>
          </div>
        </div>
      </section>
    </div>
</body>
</html>
