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
            <a href="#" class="help-block__btn">Подробнее о нас<img src="img/search.svg" alt=""></a>
            <img src="img/help-block__imageLeft.png" alt="Иллюстрация" class="help-block__image">
          </div>

          <!-- Правая часть -->
          <div class="help-block__right">
            <h3>Начните прямо сейчас — оформите заказ<br>в несколько кликов!</h3>

            <form class="help-form">
              <div class="form-group">
                <div class="address-form input-with-dot dot-red">
                  <input type="text" placeholder="Откуда*">
                </div>
              </div>

              <div class="form-group">
                <div class="address-form input-with-dot dot-purple">
                    <input type="text" placeholder="Куда*">
                </div>
              </div>

              <div class="form-row">
                <div class="input-with-icon">
                  <img src="img/time.png" alt="">
                  <input type="text" placeholder="Время*" onfocus="this.type='time'" onblur="if(!this.value) this.type='text'">
                </div>

                <div class="input-with-icon">
                  <img src="img/date.png" alt="">
                  <input type="text" placeholder="Дата*" onfocus="this.type='date'" onblur="if(!this.value) this.type='text'">
                </div>
              </div>

              <div class="help-block__action">
                <p class="help-block__policy">
                  *Нажимая кнопку «Рассчитать», я соглашаюсь с Пользовательским соглашением 
                  и даю согласие на обработку персональных данных на условиях, определенных «Политикой конфиденциальности.
                </p>
                <a href="#" class="calc-btn">Рассчитать<img src="img/arrow_right.svg" alt=""></a>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>

    <section class="features">
      <div class="container">
        <div class="features__content">

          <div class="feature-card">
            <div class="feature-card__text">
              <h3><span>30</span></h3>
              <p class="feature-card__desc">Минут чтоб<br>добраться до срочного вызова</p>
            </div>
            <div class="feature-card__icon">
              <img src="img/features__sand-watch.png" alt="Песочные часы">
            </div>
          </div>

          <div class="feature-card">
            <div class="feature-card__text">
              <h3>Надёжность и гарантия</h3>
              <p class="feature-card__desc">Весь персонал с огромным опытом работы</p>
            </div>
            <div class="feature-card__icon">
              <img src="img/features__like.png" alt="Надёжность">
            </div>
          </div>

          <div class="feature-card">
            <div class="feature-card__text">
              <h3>Проф. поддержка</h3>
              <p class="feature-card__desc">На всех этапах транспортировки</p>
            </div>
            <div class="feature-card__icon">
              <img src="img/features__heart.png" alt="Поддержка">
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="assistive">
  <div class="container">
    <h2 class="assistive__title">Позаботьтесь о близких: <br><span>вспомогательные средства</span></h2>
    <p class="assistive__subtitle">
      Если вам или вашим близким требуется дополнительная опора для передвижения, мы можем её предоставить. 
      Всё оборудование проходит регулярное обслуживание.
    </p>

    <div class="assistive__grid">
      <div class="assistive-card">
        <div class="assistive-card__text">
          <h3>Специальные кровати и матрасы</h3>
          <p>для безопасного и комфортного ухода.</p>
        </div>
        <div class="assistive-card__image">
          <img src="img/assistive__bed.png" alt="Кровать">
        </div>
      </div>

      <div class="assistive-card">
        <div class="assistive-card__text">
          <h3>Кресла-коляски</h3>
          <p>любого типа — от простых складных до электромоделей с индивидуальной настройкой.</p>
        </div>
        <div class="assistive-card__image">
          <img src="img/assistive__wheelchair.png" alt="Кресло-коляска">
        </div>
      </div>

      <div class="assistive-card">
        <div class="assistive-card__text">
          <h3>Костыли и трости</h3>
          <p>лёгкие и удобные опоры для уверенного движения при реабилитации.</p>
        </div>
        <div class="assistive-card__image">
          <img src="img/assistive__crutches.png" alt="Костыли и трости">
        </div>
      </div>

      <div class="assistive-card">
        <div class="assistive-card__text">
          <h3>Ортезы</h3>
          <p>эффективное решение для фиксации, разгрузки и восстановления опорно-двигательного аппарата.</p>
        </div>
        <div class="assistive-card__image">
          <img src="img/assistive__ortezik.png" alt="Ортезы">
        </div>
      </div>

      <div class="assistive-card">
        <div class="assistive-card__text">
          <h3>Прочие средства</h3>
          <p>всё необходимое для ухода и реабилитации в одном месте.</p>
        </div>
        <div class="assistive-card__image">
          <img src="img/assistive__utka.png" alt="Прочие средства">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="care-steps">
  <div class="container">
    <h2><span>3 шага</span> заботливой перевозки</h2>
    <div class="care-steps__block">
      
      <!-- Левая часть -->
      <div class="care-steps__image">
        <img src="img/care-steps__car-img.png" alt="Машина перевозки">
      </div>

      <!-- Правая часть -->
      <div class="care-steps__steps">
        
        <div class="care-step">
          <span class="care-step__number">1</span>
          <h3>Заказать</h3>
          <p>Оформите <b>он-лайн</b> заказ через наш сервис.</p>
        </div>

        <div class="care-step">
          <span class="care-step__number">2</span>
          <h3>Подтвердить</h3>
          <p>Подтвердим бронь и напомним за <b>60 минут</b> до вашей поездки.</p>
        </div>

        <div class="care-step">
          <span class="care-step__number">3</span>
          <h3>И всё!</h3>
          <p>Возьмите необходимые вещи и <b>сообщите родным</b> о поездке.</p>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>
