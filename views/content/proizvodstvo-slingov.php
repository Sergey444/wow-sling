<?php include ROOT.'/views/layouts/header.php' ?>
<h1 class="visually-hidden">Эргорюкзак</h1>
  <section class="about-shop  about-shop--catalog">
      <div class="about-shop__wrapper">
        <h4 class="about-shop__title">Производство</h4>
        <p style="padding: 20px;">
            Слинги ТМ "СлингУля" производятся в г. Череповец с 2011 года.
            Основатель компании и разработчик уникальной конструкции своих слингов -
            Головкина Ульяна Александровна, дважды мама и сертифицированный слингоконсультант.
            Конструкция слингов совершенствовалась на протяжении многих лет в соответствии
            с рекомендациями врачей о физиологичном положении детей и тестировалась всей командой
            ТМ "СлингУля", поэтому у нас (и у всех наших многочисленных клиентов!) нет никаких сомнений
            в эргономичности рюкзачков и май-слингов СлингУли!<br><br>

            Для производства рюкзачков и май-слингов используются только 100% натуральные, качественные ткани (лён и хлопок),
            которые позволяют телу дышать и не вызывают аллергических реакций, соприкасаясь с чувствительной детской кожей.<br><br>

            Перед отправкой клиентам и представителям, каждый слинг на производстве проходит строгую ОТК проверку (контроль качества), поэтому мы можем
            гарантировать своим клиентам превосходное качество наших слингов! А в том случае, если по каким-то причинам товар всё же пришёл с дефектом, мы готовы обменять его или сделать возврат.
        </p>

        <div class="owl-carousel">
            <!-- <div><img src="/template/img/proizvodstvo/1.jpg" alt="Производство"></div> -->
            <div class="item"><img src="/template/img/proizvodstvo/2.jpg" alt="Производство слингов"></div>
            <div class="item"><img src="/template/img/proizvodstvo/3.jpg" alt="Производство слингов"></div>
            <div class="item"><img src="/template/img/proizvodstvo/4.jpg" alt="Производство слингов"></div>
            <div class="item"><img src="/template/img/proizvodstvo/5.jpg" alt="Производство слингов"></div>
            <div class="item"><img src="/template/img/proizvodstvo/6.jpg" alt="Производство слингов"></div>
            <!-- <div class="item"><img src="/template/img/proizvodstvo/7.jpg" alt="Производство"></div>
            <div class="item"><img src="/template/img/proizvodstvo/8.jpg" alt="Производство"></div> -->
        </div>
      </div>
  </section>





<script>

$(document).ready(function() {
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
          nav: true,
          loop: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          margin: 20,
          items:3,
          responsive: {
              0: {
                  items: 1
              },
              768: {
                  items: 2
              },
              1200: {
                  items: 4
              }
          }

      });
    });
});


</script>

<style media="screen">
    .owl-carousel {
        width: 90%;
        margin: auto;
    }

    .owl-nav {


    }

    .owl-prev,
    .owl-next {
        font-size: 0;
        top: 42%;
        position: absolute;
        height: 38px;
        width: 20px;
    }

    .owl-prev {
        left: -30px;
    }

    .owl-next {
        right: -30px;
    }

    .owl-prev {
        transform: rotate(180deg);
    }

    .owl-prev::before,
    .owl-next::before,
    .owl-prev::after,
    .owl-next::after {
        content: "";
        display: block;
        position: absolute;
        width: 20px;
        height: 3px;
        background-color: lightgrey;
    }

    .owl-prev::before,
    .owl-next::before {
        transform: rotate(45deg);
        top: 11px;

    }

    .owl-prev::after,
    .owl-next::after {
        transform: rotate(-45deg);
    }
</style>


<?php include ROOT.'/views/layouts/footer.php' ?>
