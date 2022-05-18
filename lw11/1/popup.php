<section class="popup-bg">
   <div class="popup">
      <div class="popup__content">
         <div class="none_column">
            <img src="images/welcome.svg" class="popup__images" alt="">
            <button class="btn_close-popup"><img src="images/close.svg" alt=""></button>
         </div>
         <h2 class="form__title">Записаться на курс</h2>
         <form class="popup-form" method="POST">
            <input class="popup__window" id='name' name="name" type="text" placeholder="Ваше имя">
            <input class="popup__window" id="email" name="email" type="text" placeholder="Email">
            <select class="popup__window popup__choose" id="profession" name="profession" placeholder="Деятельность">
               <option value="" selected disabled hidden>Деятельность</option>
               <option class="popup__choose_elem popup__choose_elem1">Программист</option>
               <option class="popup__choose_elem">Дизайнер</option>
               <option class="popup__choose_elem">Маркетолог</option>
            </select>
            <div class="checkbox">
               <input class="approval_btn" id="agreement" name="checkbox" type="checkbox">
               <label class="agreement-text" for="agreement">Согласен получать информационные материалы о старте курса</label>
            </div>
         </form>
         <button class="form__button">Записаться на курс</button>
      </div>
   </div>
</section>