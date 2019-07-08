<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
      require('require/head.php');
    ?>
  </head>

  <body>
    <header>
      <?php
        require('require/header.php');
      ?>
    </header>
    <section id="top">
      <img src="img/top_bg.png" alt="">
    </section>
    <section class="content" id="bannertext">
      <h2>ОКНА И ДВЕРИ СПОСОБНЫЕ ВАС ВДОХНОВЛЯТЬ</h2>
      <p class="banner__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio</p>
    </section>
    <section class="banner">
      <img src="img/banner.png" alt="">
    </section>
    <section class="content" id="ad">
      <div class="ad__block">
        <img src="img/ad1.png" alt="">
        <h3>Удобные решения для вашего балкона</h3>
        <p class="ad__block-text">Узнайте о самых современных решениях в нашей статье</p>
        <a class="ad__block-button" href="#">Узнать больше</a>
      </div>
      <div class="ad__block">
        <img src="img/ad1.png" alt="">
        <h3>Удобные решения для вашего балкона</h3>
        <p class="ad__block-text">Узнайте о самых современных решениях в нашей статье</p>
        <a class="ad__block-button" href="#">Узнать больше</a>
      </div>
    </section>
    <section class="content" id="info">
      <div class="info__item small">
        <img src="img/item.png" alt="">
        <p class="info__item-text">Заголовок</p>
      </div>
      <div class="info__item small">
        <img src="img/item2.png" alt="">
        <p class="info__item-text">Заголовок</p>
      </div>
      <div class="info__item big">
        <img src="img/item3.png" alt="">
        <p class="info__item-text">Заголовок</p>
      </div>
    </section>
    <section class="content" id="map"></section>
    <footer>
      <div class="content footer">
        <?php
          require('require/footer.php');
        ?>
      </div>
    </footer>
  </body>
</html>
