<section class="form">
   <img src="/images/welcome.svg" class="form__images" alt="">
   <h2 class="form__title">Записаться на курс</h2>
   <form method="post" action="/form_handler.php" class="shipment">
      <input type="text" name="name" placeholder="Ваше имя" class="shipment__window">
      <input type="email" name="email" placeholder="Email" class="shipment__window">
      <select name="profession" id="" placeholder="Деятельность" class="shipment__window shipment__choose">
         <option value="" selected disabled hidden>Деятельность</option>
         <option class="shipment__choose_elem shipment__choose_elem1">Программист</option>
         <option class="shipment__choose_elem">Дизайнер</option>
         <option class="shipment__choose_elem">Маркетолог</option>
      </select>
      <div class="checkbox">
         <input class="approval_btn" type="checkbox" name="checkbox" id="approval">
         <label class="approval" for="approval">Согласен получать информационные материалы о старте курса</label>
      </div>
      <input class="form__button"  type="submit" name="send" value="Записаться на курс">
   </form>
</section>