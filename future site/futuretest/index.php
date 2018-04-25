<?php
 require_once 'functions.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Future</title>
<link rel='stylesheet' href='css/styles.css' type='text/css'>
<script src="scripts/jquery-3.3.1.min.js"></script>
<script src="scripts/validateScript.js"></script>
<script>
    $(document).ready(function(){
        $(".commentary").load("loadcomments.php");
    });
</script>
</head>
<body>
<div id="allcontent">
 <header>
    <img id="logo" src="images/logo.png" alt="Логотип">
    <div id="header_content">
        <div class="header_phone">Телефон: (499) 340-94-71</div>
        <div class="header_mail">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></div>
        <div class="header_comments">Комментарии</div>
    </div>
 </header>
 <section class="commentary_section">
     <div class="commentary"></div>
     <hr>
     <div class="commentary_form">
     <h1>Оставить комментарий</h1>
     <form method='post' action='' onsubmit="return validateForm(this);">
       Ваше имя <span id="nameError"></span><br>
       <input type="text" class="commentary_input" id="name" name="name" placeholder="Введите ваше имя..."></textarea><br>
       Ваш комментарий <span id="textError"></span><br>
       <textarea class="commentary_input" id = "text" name='text' rows='6'></textarea><br>
       <input id="submit_button" type='submit' value='Отправить'>
     </form><br>
     </div>
 </section>
 <footer>
    <img id="footer_logo" src="images/logo.png" alt="Логотип">
    <div class="footer_content">
     <div id="footer_content_bottom">
     Телефон: (499) 340-94-71<br>
     Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a><br>
     Aдрес: <a href="https://goo.gl/maps/QQYMgLFgc662">115088 Москва, ул. 2-я Машиностроения, д.7 стр.1</a> 
     <div class="copy"><br>©2010-2014 Future. Все права защищены</div>
     </div>
    </div>
</footer>
</div>

</body>
</html>