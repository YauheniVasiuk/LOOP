<footer class="footer">
   <div class="footer_top">
      <div class="container">

         <div class="footer_list">
            <div class="footer_item">

               <div class="footer_logo">
                  <a href="/"><span class="ico_logo"><span class="title_logo">THE&nbspLOOP</span></span></a>
               </div>

               <p>Интернет-магазин the LOOP наиболее удобный способ покупать мужскую и женскую одежду и обувь в Республике Беларусь. </p>

            </div>

            <div class="footer_item">

               <h4>Основные ссылки</h4>

               <div class="main_links">
                  <ul class="footer_links">
                     <li><a href="/about/">О компании</a></li>
                     <li><a href="/catalog/">Каталог</a></li>
                     <li><a href="/delivery/">Доставка</a></li>
                     <li><a href="/payment/">Оплата</a></li>
                  </ul>
               </div>

            </div>
            <div class="footer_item">

               <h4>Категории</h4>

               <ul class="footer_links">
                  <li><a href="/catalog/0/">Мужская одежда</a></li>
                  <li><a href="/catalog/1/">Женская одежда</a></li>
                  <li><a href="/catalog/2/">Детская одежда</a></li>
                  <li><a href="/catalog/3/">Для животных</a></li>
               </ul>

            </div>
            <div class="footer_item">

               <h4>ПОЛЕЗНЫЕ ССЫЛКИ</h4>

               <div class="useful_links">
                  <ul class="footer_links">
                     <li><a href="#">Таблица размеров</a></li>
                     <li><a href="#">Блог о моде</a></li>
                     <li><a href="#">Наша миссия</a></li>
                  </ul>
               </div>

            </div>
            <div class="footer_item">

               <h4>СОЦ СЕТИ</h4>

               <div class="social_links">
                  <ul class="footer_links">
                     <li><span class="ico ico_vk"></span><a href="#">VK.com</a></li>
                     <li><span class="ico ico_Facebook"></span><a href="#">Facebook</a></li>
                     <li><span class="ico ico_Instagram"></span><a href="#">Instagram</a></li>
                  </ul>
               </div>

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