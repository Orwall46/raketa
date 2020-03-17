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
	<title>Dream Comes - Регистрация</title>
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
	
<?php if ( !isset($_SESSION['logged_user'])) : ?>
    <?php else : ?>    
             <script>alert('Вы уже зарегистрированы');location.href='/my';</script>"; 
             <?php endif; ?>
<?php
$login = htmlspecialchars (trim($_POST['login']));
$email = htmlspecialchars (trim($_POST['email']));
$password = htmlspecialchars (trim($_POST['password']));
$password_2 = htmlspecialchars (trim($_POST['password_2']));
$name = htmlspecialchars (trim($_POST['name']));
$birthday = htmlspecialchars (trim($_POST['birthday']));
$gender = ($_POST['gender']);
$ee = "'";
$ee1 = ";";
$ee2 = "-";
if(isset($_POST['do_signup']))
{
	// здесть регистрируем 
	$errors = array();
	if ($email =='' )
	{
		$errors[] = 'Введите email';
	}
	if ((stristr($email, $ee)) || (stristr($email, $ee1)) || (stristr($email, $ee2))) {
		$errors[] = 'Указан недопустимый символ в Email';
	}
	
	if ($login =='' )
	{
		$errors[] = 'Введите логин';
	}
	
	if ((stristr($login, $ee)) || (stristr($login, $ee1)) || (stristr($login, $ee2))) {
		$errors[] = 'Указан недопустимый символ в логине';
	}
	
	if ($password =='' )
	{
		$errors[] = 'Введите пароль';
	}
	if (strlen($password) <6)
	{
		$errors[] = 'Длина пароля должна состоять из минимум 6 символов';
	}
	if ((stristr($password, $ee)) || (stristr($password, $ee1)) || (stristr($password, $ee2))) {
		$errors[] = 'Указан недопустимый символ в Пароле';
	}
	
	if ($password != $password_2 )
	{
		$errors[] = 'Повторный пароль введен не верно';
	}
	if ((stristr($password_2, $ee)) || (stristr($password_2, $ee1)) || (stristr($password_2, $ee2))) {
		$errors[] = 'Указан недопустимый символ в Повторном Пароле';
	}
	
	if ($name =='' ) 
		{
			$errors[] = 'Укажите как Вас зовут';
		}
	if ((stristr($name, $ee)) || (stristr($name, $ee1)) || (stristr($name, $ee2))) {
		$errors[] = 'Указан недопустимый символ в поле ФИО';
	}
	
	if ($birthday == '' ) 
		{
			$errors[] = 'Укажите дату рождения';
		}
	
	
	
	if ($gender =='none' ) 
		{
			$errors[] = 'Укажите ваш пол';
		}
	
	if (R::count('users1', "login = ?", array($login))>0)
	{
		$errors[] = 'Пользователь с таким логином существует';
	}
	if (R::count('users1', "email = ?", array($email))>0)
	{
		$errors[] = 'Пользователь с таким email существует';
	}
	
	date_default_timezone_set('Asia/Yekaterinburg');
	$date_active = date("Y-m-d H:i:s", time()+60*60*24*30);
	$active = "0";
	
	if (empty($errors))
	{
		// Все хорошо, регистрируем
		$user1 = R::dispense('users1');
		$user1->login = $login;
		$user1->email = $email;
		$user1->gender = $gender;
		$user1->name = $name;
		$user1->birthday = $birthday;
		$user1->password = crypt($password);
		$user1->date_active = $date_active;
		$user1->active = $active;
		R::store($user1);
		
		$aboutuser1 = R::dispense('aboutuser1');
		$aboutuser1->login = $login;
		$aboutuser1->name = $name;
		R::store($aboutuser1);
		
		$link = "https://dreamcomes.ru/";
	                             $subject = "Dream Comes - Регистрация";

	                             //Устанавливаем кодировку заголовка письма и кодируем его
	                             $subject = "=?utf-8?B?".base64_encode($subject)."?=";

	                             //Составляем тело сообщения
	                             $message = 'Привет, "'.$name.'"!<br>
								 Вы только что зарегистрировались на Площадке DreamComes! <br> 
								 Спешим Вас порадовать с тем, что Ваш проект будет активным до "'.$date_active.'"<br>
								 К этому времени Вы можете зарегистрировать свою мечту и помочь другим людям в достижении своих целей.<br>
								 Если у Вас возникнут вопросы, то команда Dream Comes всегда готова оказать помощь!<br>
								 С Уважением к Вам, <br>
								 Площадка <a href ="'.$link.'"> DreamComes</a> ' ;
	                             
	                             //Составляем дополнительные заголовки для почтового сервиса mail.ru
	                             //Переменная $email_admin, объявлена в файле dbconnect.php
	                             $headers = "FROM: $email_admin\r\nReply-to: $email_admin\r\nContent-type: text/html; charset=utf-8\r\n";
		
	mail($email, $subject, $message, $headers);
		
		echo '<div id="myModalBox" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ура!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Поздравляем! Вы успешно зарегистрировали свой проект. Теперь, необходимо осуществить вход на сайт.</p>
      </div>
      <div class="modal-footer">
        <a href="login"><button type="button" class="btn btn-primary">Войти</button></a>
      </div>
    </div>
  </div>
</div>
	  <script>
  $(document).ready(function() {
    $("#myModalBox").modal("show");
  });
</script>';
	} else {
		
		
		echo '<div id="myModalBox2" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Упс!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>'.array_shift($errors).'</p>
      </div>
    </div>
  </div>
</div>
	  <script>
  $(document).ready(function() {
    $("#myModalBox2").modal("show");
  });
</script>';
	}
}

?>	
  	   <div class="container">
 	   		<div class="shadow-lg p-3 mb-5 bg-white rounded">
  	   		<div class="card text-center">
  				<div class="card-body">
  				<h5 class="card-title">Регистрация нового пользователя</h5>
  				
  	   <form action="/registration" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo @$email ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputlogin">Логин</label>
      <input type="text" name="login" class="form-control" id="inputlogin" value="<?php echo @$login ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword1">Ваш пароль</label>
      <input type="password" class="form-control" name="password" id="inputPassword1" value="<?php echo @$password ?>" placeholder="Минимум 6 символов">
    </div>
     <div class="form-group col-md-6">
		 
      <label for="inputPassword2">Введите Ваш пароль повторно</label>
      <input type="password" name="password_2" id="inputPassword2" class="form-control" value="<?php echo @$password_2 ?>">
    </div>
  </div>
  <h6 class="card-title">Укажите информацию о Вас</h6>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputname">Как Вас зовут? Укажите ФИО</label>
      <input type="text" name="name" class="form-control" id="inputname" maxlength="45" value="<?php echo @$name ?>"> 
    </div>
    <div class="form-group col-md-6">
      <label for="birthday">Дата рождения</label>
      <input type="date" name="birthday" class="form-control" id="birthday" value="<?php echo @$birthday ?>">
    </div>
    <div class="form-group col-md-4 mx-auto">
      <label for="inputgender">Укажите свой пол</label>
      <select id="inputgender" class="form-control" name="gender">
        <option value="none" hidden="">Выберите пол</option>
        	<option value="Мужской">Мужской</option>
			<option value="Женский">Женский</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck" required>
        Согласен со всеми правилами проекта Dream Comes
      </label>
    </div>
  </div>
  <button type="submit" name="do_signup" class="btn btn-primary">Регистрация</button>
</form>
		   </div>
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
					<script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>

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