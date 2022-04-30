<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto&family=Roboto+Condensed&display=swap"
      rel="stylesheet">
   <script src="script/script.js" defer></script>
   <title>Dont do it</title>
</head>
<body>
   <article class="container">
      <header class="top">
         <div class="logo">Don`t <span class="pink">do</span> it</div>
         <div class="top__interactive">
            <nav class="top__navigation">
               <ul class="top__elements">
                  <li class="point-not-decoration"><a href="#" class="point__link-not-decoration">Что будет на курсе?</a></li>
                  <li class="point-not-decoration"><a href="#" class="point__link-not-decoration">Вопросы</a></li>
                  <li class="point-not-decoration"><a href="#" class="point__link-not-decoration">Автор</a></li>
               </ul>
            </nav>
            <button class="button button_short">Записаться на курс</button>
         </div>
      </header>
      <main>
         <section class="main-block">
            <div class="main-block__info">
               <h1 class="main-title">Не <span class="pink">делай</span> это</h1>
               <p class="main-block__text text">Онлайн-курс для творческих людей, о том, как управлять своим временем</p>
               <button class="button button_long">Записаться на курс</button>
            </div>
            <img class="main_image" src="images/main_img.png" alt="">
         </section>

         <section class="for-whom">
            <div class="for-whom__info for-whom__block1">
               <img class="for-whom__icon" src="images/time.svg" alt="">
               <h3 class="for-whom__description">Для тех, у кого слишком много идей и слишком мало времени</h3>
            </div>

            <div class="for-whom__info for-whom__block2">
               <img class="for-whom__icon" src="images/notepad.svg" alt="">
               <h3 class="for-whom__description">Метод «списка не дел», который позволит успевать и реализовывать</h3>
            </div>

            <div class="for-whom__info for-whom__block3">
               <img class="for-whom__icon" src="images/target.svg" alt="">
               <h3 class="for-whom__description">Курс научит творческих людей сосредоточиваться</h3>
            </div>
         </section>

         <section class="motivation">
            <div class="motivation__block1">
               <img class="motivation__image" src="images/finances.png" alt="">
               <div class="motivation_block1__num1">
                  <h2 class="motivation__heading">Ты не успеешь</h2>
                  <p class="motivation-block__simple-text">
                     Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей.
                     Как прибавить суткам часы, рассмотрим в нашем курсе.
                  </p>
               </div>
            </div>

            <div class="motivation__block2">
               <div class="motivation_block2__num2">
                  <h2 class="motivation__heading">Опять дедлайн</h2>
                  <p class="motivation-block__simple-text">В мире, где столько всего интересного, когда же успевать жить?</p>
               </div>
               <img class="motivation__image" src="images/mind_blowing.png" alt="">
            </div>
         </section>

         <section class="description">
            <h2 class="description__heading">На курсе ты <span class="pink">сможешь</span></h2>

            <div class="description__blocks">
               <div class="description__block description__block1">
                  <img src="images/one_fing.svg" alt="">
                  <p class="description__text">Понять, что нужно делать, а что делать не стоит.</p>
               </div>

               <div class="description__block description__block2">
                  <img src="images/two_fings.svg" alt="">
                  <p class="description__text">Перестать себя искусственно ограничивать.</p>
               </div>

               <div class="description__block description__block3">
                  <img src="images/tree_fings_first.svg" alt="">
                  <p class="description__text">Определить сильные стороны и начать использовать слабые.</p>
               </div>

               <div class="description__block description__block4">
                  <img src="images/four_fings.svg" alt="">
                  <p class="description__text">Научиться достигать любой цели в 3 понятных шага.</p>
               </div>

               <div class="description__block description__block5">
                  <img src="images/five_fings.svg" alt="">
                  <p class="description__text">Сотрудничать эффективно и с правильными людьми.</p>
               </div>

               <div class="description__block description__block6">
                  <img src="images/tree_fings_second.svg" alt="">
                  <p class="description__text">Оптимизировать общение с клиентами и проведение совещаний.</p>
               </div>
            </div>
         </section>
      </main>
      <?php
         include "popup.php";
      ?>
      <footer class="end">
         <h2 class="end__text">Don`t <span class="pink">do</span> it</h2>
      </footer>
   </article>
</body>
</html>