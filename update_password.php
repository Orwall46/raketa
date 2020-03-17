<?php 
	
	//Добавляем файл подключения к БД
	require_once("dbconnect.php");
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
	<title>Dream Comes - Установка нового пароля</title>
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

<footer class="page-footer font-small unique-color-dark pt-0">
	<div class="container mt-5 mb-4 text-center text-md-left color2">
		<div class="row mt-3">
			<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
				<h6 class="text-uppercase font-weight-bold">Dream Comes</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
				<p>+7 963 851 63 10</p>
				
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

<?php

	if(isset($_POST["set_new_password"]) && !empty($_POST["set_new_password"])){

		
		//Проверяем, если существует переменная token в глобальном массиве POST
		if(isset($_POST['token']) && !empty($_POST['token'])){
		    $token = $_POST['token'];

		}else{
			// Сохраняем в сессию сообщение об ошибке. 
			$_SESSION["error_messages"] = "<p class='mesage_error' ><strong>Ошибка!</strong> Отсутствует проверочный код ( Передаётся скрытно ).</p>";
			
			//Возвращаем пользователя на страницу установки нового пароля
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ".$address_site."set_new_password?email=$email&token=$token");
			//Останавливаем  скрипт
			exit();
		}

		//Проверяем, если существует переменная email в глобальном массиве POST
		if(isset($_POST['email']) && !empty($_POST['email'])){
		    $email = $_POST['email'];

		}else{
			// Сохраняем в сессию сообщение об ошибке. 
			$_SESSION["error_messages"] = "<p class='mesage_error' ><strong>Ошибка!</strong> Отсутствует адрес электронной почты ( Передаётся скрытно ).</p>";
			
			//Возвращаем пользователя на страницу установки нового пароля
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: ".$address_site."set_new_password?email=$email&token=$token");
			//Останавливаем  скрипт
			exit();
		}

		if(isset($_POST["password"])){
		    //Обрезаем пробелы с начала и с конца строки
		    $password = trim($_POST["password"]);
		    //Проверяем, совпадают ли пароли
		    if(isset($_POST["confirm_password"])){
		        //Обрезаем пробелы с начала и с конца строки
		        $confirm_password = trim($_POST["confirm_password"]);
		        if($confirm_password != $password){
		            // Сохраняем в сессию сообщение об ошибке. 
		            $_SESSION["error_messages"] = "<p class='mesage_error' >Пароли не совпадают</p>";
		            
		            //Возвращаем пользователя на страницу установки нового пароля
		            header("HTTP/1.1 301 Moved Permanently");
		            header("Location: ".$address_site."set_new_password?email=$email&token=$token");
		            //Останавливаем  скрипт
		            exit();
		        }
		    }else{
		        // Сохраняем в сессию сообщение об ошибке. 
		        $_SESSION["error_messages"] = "<p class='mesage_error' >Отсутствует поле для повторения пароля</p>";
		        
		        //Возвращаем пользователя на страницу установки нового пароля
		        header("HTTP/1.1 301 Moved Permanently");
		        header("Location: ".$address_site."set_new_password?email=$email&token=$token");
		        //Останавливаем  скрипт
		        exit();
		    }
		    if(!empty($password)){
		        $password = htmlspecialchars($password, ENT_QUOTES);
		        //Шифруем папроль
		        $password = crypt($password); 
		    }else{
		        // Сохраняем в сессию сообщение об ошибке. 
		        $_SESSION["error_messages"] = "<p class='mesage_error' >Пароль не может быть пустым</p>";
		        
		        //Возвращаем пользователя на страницу установки нового пароля
		        header("HTTP/1.1 301 Moved Permanently");
		        header("Location: ".$address_site."set_new_password?email=$email&token=$token");
		        //Останавливаем  скрипт
		        exit();
		    }
		}else{
		    // Сохраняем в сессию сообщение об ошибке. 
		    $_SESSION["error_messages"] = "<p class='mesage_error' >Отсутствует поле для ввода пароля</p>";
		    
		    //Возвращаем пользователя на страницу установки нового пароля
		    header("HTTP/1.1 301 Moved Permanently");
		    header("Location: ".$address_site."set_new_password?email=$email&token=$token");
		    //Останавливаем  скрипт
		    exit();
		}


		//(2) Место для следующего куска кода
		$query_update_password = $mysqli->query("UPDATE users1 SET password='$password' WHERE email='$email'");

		if(!$query_update_password){

		    // Сохраняем в сессию сообщение об ошибке. 
		    $_SESSION["error_messages"] = "<p class='mesage_error' >Возникла ошибка при изменении пароля.</p><p><strong>Описание ошибки</strong>: ".$mysqli->error."</p>";
		    
		    //Возвращаем пользователя на страницу установки нового пароля
		    header("HTTP/1.1 301 Moved Permanently");
		    header("Location: ".$address_site."set_new_password?email=$email&token=$token");
		    
		    //Останавливаем  скрипт
		    exit();

		}else{
			//Выводим сообщение о том, что пароль установлен успешно.
			echo 	
				'<div id="myModalBox" class="modal" tabindex="-1" role="dialog">
  					<div class="modal-dialog" role="document">
						<div class="modal-content">
					  		<div class="modal-header">
        						<h5 class="modal-title">Системное оповещение</h5>
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">&times;</span>
        						</button>
      						</div>
						<div class="modal-body">
							<p>Пароль успешно изменён!!!</p>
      					</div>
      				<div class="modal-footer">
       					<a href="login"><button type="button" class="btn btn-primary">Войти</button></a>
      				</div>
    			</div>
  			</div>
			</div>
				<script type="text/javascript">
				$(document).ready(function() {$("#myModalBox").modal("show");});
				</script>';}

	}else{
		
		echo 
			'<div id="Error" class="modal" tabindex="-1" role="dialog">
  					<div class="modal-dialog" role="document">
						<div class="modal-content">
					  		<div class="modal-header">
        						<h5 class="modal-title">Ошибка!</h5>
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">&times;</span>
        						</button>
      						</div>
						<div class="modal-body">
							<p>Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на главную страницу</p>
      					</div>
      				<div class="modal-footer">
       					<a href="/"><button type="button" class="btn btn-primary">Перейти</button></a>
      				</div>
    			</div>
  			</div>
			</div>
				<script type="text/javascript">
				$(document).ready(function() {$("#Error").modal("show");});
				</script>';}
?>
</body>
</html>