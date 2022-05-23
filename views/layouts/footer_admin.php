<footer class="footer">
   <div class="footer_top">
      <div class="container">

         <div class="footer_list">
            <div class="footer_item_admin">

               <div class="footer_logo_admin">
                  <a href="#"><span class="ico_logo"><span class="title_logo">THE&nbspLOOP</span></span></a>
               </div>

               <p>Помни Администратор - Ты фигура, полностью отвечающая за работоспособность и безопасность сайта компании. </p>

            </div>

         </div>

      </div>
   </div>
   <div class="footer_bot">
      <div class="container">

         <div class="footer_bot_wrapper">

            <div class="footer_bot_copyrights">Copyright &copy; 2022. Все права защищены</div>

            <div class="footer_bot_private">Финальный проект Васюк Е.Ю.</div>

         </div>

      </div>
   </div>
</footer>

<script>
   // Выполняется только при полной загрузке документа
   $(document).ready(function() {
      // По клику на кнопку с классом "add-to-cart" выпоняется call-back функция
      $(".add-to-cart").click(function() {
         // Создаем переменную id и помещаем в нее значение из data-id с использованием jquery(возможностей) $(this)
         var id = $(this).attr("data-id");
         // Выполняем post-запрос с помощью jquery. Устанавливаем путь(адресс запроса), параметры(пустые), call-back функция с данными от выполнения запроса
         $.post("/cart/addAjax/" + id, {}, function(data) {
            // Устанавливаем в поле с id="cart-count" значение полученное из запроса с помощью jquery .html(data)
            $("#cart-count").html(data);
         });
         return false;
      });
   });
</script>
</div>

</body>

</html>