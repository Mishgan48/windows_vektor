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
    <section class="content" id="certificats">
      <h2>Сертификаты</h2>
      <div class="certificats__block">
        <div class="certificats__block-img"><img src="img/sert_1.jpg" alt=""></div>
        <div class="certificats__block-img"><img src="img/sert_1.jpg" alt=""></div>
        <div class="certificats__block-img"><img src="img/sert_1.jpg" alt=""></div>
      </div>
    </section>
    <section class="content" id="contacts">
      <h2>Контакты</h2>
      <div class="contacts__block">
        <div class="contacts__block-info"></div>
        <div class="contacts__block-map">
          <img src="img/map.png" alt="">
        </div>
      </div>
    </section>
    <footer>
      <div class="content footer">
        <?php
          require('require/footer.php');
        ?>
      </div>
    </footer>
  </body>
</html>
