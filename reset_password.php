<?php
	require "db.php";
?>
<!doctype html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta name="Keywords" content="Dream, money, help"/>
   <meta name="Description" content="Проект, который помогает осуществить Вашу мечту!"/>
   <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="/css/style.css"/>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/b718da1352.js" crossorigin="anonymous"></script>
   	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Dream Comes - Восстановление пароля</title>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57644605, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57644605" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>

<body>


<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="/">Dream CØmes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
   <div class="mx-auto">
    	<form class="form-inline" method="post" action="/search">
    <input class="form-control mr-sm-2" name="text" type="search" placeholder="Поиск" aria-label="Search">
    <input type="submit" name="enter" value="Поиск" class="btn btn-outline-success my-2 my-sm-0"/>
  		</form>
    </div>
    <ul class="navbar-nav">
     <li class="nav-item dropdown">
       <?php if ( isset($_SESSION['logged_user'])) : ?>
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Привет, <?php echo $_SESSION['logged_user']->login; ?>!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/my">Моя страница</a>
          <a class="dropdown-item" href="/history">История переводов</a>
		  <a class="dropdown-item" href="/logout">Выйти</a>
        </div>
       <?php else : ?>
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Начать
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/signup">Регистрация</a>
          <a class="dropdown-item" href="/login">Вход</a>
        </div>
        <?php endif; ?>
      </li>
      <li class="nav-item dropdown">
		   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         	Проекты</a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		  <a class="dropdown-item" href="/project">Мечты</a>
          <a class="dropdown-item" href="/dreamcomes">DreamComes Мечты</a>
		 </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">О нас</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">Научиться</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/support">Поддержка</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
	</nav>
</header>


<!--мы проверяем, ввёл ли пользователь правильный почтовый адрес.-->
   <script type="text/javascript">
    $(document).ready(function(){
        "use strict";
        //регулярное выражение для проверки email
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');
         
        mail.blur(function(){
            if(mail.val() != ''){
                // Проверяем, если email соответствует регулярному выражению
                if(mail.val().search(pattern) == 0){
                    // Убираем сообщение об ошибке
                    $('#valid_email_message').text('');
                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }else{
                    //Выводим сообщение об ошибке
                    $('#valid_email_message').text('Не правильный Email');
                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                }
            }else{
                $('#valid_email_message').text('Введите Ваш email');
            }
        });
    });
</script>

<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
             //Уничтожаем ячейку error_messages, чтобы сообщения об ошибках не появились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем ячейку success_messages, чтобы сообщения не появились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if((!isset($_SESSION["logged_user"]) && !isset($_SESSION["password"]))) {
        if(!isset($_GET["hidden_form"])){
?>
 <div class="container">
 <div class="shadow-lg p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  		<div class="card-body">
    		<h5 class="card-title">Получить новый пароль</h5>
    		<p class="text_center mesage_error" id="valid_email_message"></p>
    			<form action="send_link_reset_password" method="post" name="form_request_email" >
				  <div class="form-group col-md-3 mx-auto d-block">
					<label for="exampleInputEmail1">Укажите Ваш E-mail:</label>
					<input type="email" name="email" class="form-control">
				  </div>
					  <div class="form-group col-md-3 mx-auto d-block">
						<label for="exampleInputPassword1">Введите капчу</label>
						<img src="captcha" alt="Капча" /> <br />
						<input type="text"  name="captcha" placeholder="Проверочный код" class="form-control" id="exampleInputPassword1">
					  </div>
  						<button type="submit" name="send" class="btn btn-primary mx-auto d-block" style="margin-bottom: 15px;">Отправить письмо на почту</button>
				</form>
				  <div class="card-footer text-muted" style="border-radius: 20px;">
					Если, вдруг, Вы вспомнили свой пароль, то можно попробовать войти <a href="login" class="btn btn-primary">Вход</a>
				  </div>
		</div> 
<?php
        }//закрываем условие hidden_form
 
    }else{ 
?>

 <div id="myModalBox" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Системное оповещение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Вы уже авторизованы</p>
      </div>
      <div class="modal-footer">
        <a href="/"><button type="button" class="btn btn-primary">Вернуться на главную страницу</button></a>
      </div>
    </div>
  </div>
</div>
	  <script>
  $(document).ready(function() {
    $("#myModalBox").modal('show');
  });
</script>
       <?php
    } ?> 

</div>
      </div>
	</div>
       
       		
<footer class="page-footer font-small unique-color-dark pt-0">
	<div class="container mt-5 mb-4 text-center text-md-left color2">
		<div class="row mt-3">
			<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
				<h6 class="text-uppercase font-weight-bold">Dream Comes</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>+7 963 851 63 10</p>
				<p>
				

				</p>
			</div>
			
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">О нас</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p><a href="/about">Контакты</a></p>
				<p><a href="/faq">FAQ</a></p>
				<p><a href="/support">Напишите нам</a></p>
			</div>
			
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">Помощь</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p><a href="/rules">Правила</a></p>
				<p><a href="/term_of_use">Пользовательское соглашение</a></p>
				<p><a href="/privacy">Политика конфиденциальности</a></p>
			</div>
			
		</div>
	</div>
	<div class="color">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0 white-text">Будь на связи с нами в соц. сетях!</h6>
					<small><span class="copy">Все права защищены &copy; 2020</span></small>
				</div>
				<div class="col-md-6 col-lg-7 text-center text-md-right">
					
					<a href="https://vk.com/dream.comes" target="_blank" class="fb-ic ml-0">
						<i class="fab fa-vk mr-4"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>
</html>