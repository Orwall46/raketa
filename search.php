<?php
	require "dbconnect.php"; 
	require "functions.php";
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
	<title>Dream Comes</title>
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


<!-- Категории -->

	<h3 class="text-center popular">Категории<br>
		<a href="/bitovaya" class="btn btn-light btn-sm" role="button" aria-pressed="true">Бытовая электроника</a>
 		<a href="/for_house" class="btn btn-light btn-sm" role="button" aria-pressed="true">Для дома и дачи</a>
		<a href="/for_buisness" class="btn btn-light btn-sm" role="button" aria-pressed="true">Для бизнеса</a>
		<a href="/health" class="btn btn-light btn-sm" role="button" aria-pressed="true">Здоровье</a>
		<a href="/personal_stuff" class="btn btn-light btn-sm" role="button" aria-pressed="true">Личные вещи</a>
		<a href="/property" class="btn btn-light btn-sm" role="button" aria-pressed="true">Недвижимость</a>
		<a href="/transport" class="btn btn-light btn-sm" role="button" aria-pressed="true">Транспорт</a>
		<a href="/services" class="btn btn-light btn-sm" role="button" aria-pressed="true">Услуги</a>
		<a href="/hobby" class="btn btn-light btn-sm" role="button" aria-pressed="true">Хобби и отдых</a>
		<a href="/other" class="btn btn-light btn-sm" role="button" aria-pressed="true">Прочее</a>
		<a href="/interested" class="btn btn-light btn-sm" role="button" aria-pressed="true">Интересные</a>
	</h3>
	
<?php
	
$ee = "'";
$ee1 = ";";
$ee2 = "-";
$errors = array();
	
	if(!empty($_SESSION['logged_user'])){
	$y=$_SESSION['logged_user']->id;
	$result=$mysqli->query("SELECT * FROM `users1` WHERE id=$y");
	while($row = mysqli_fetch_array($result)){
	$login=$row['login'];
	$active = $row['active'];
	$date_active = $row['date_active'];
	}} else;
	
	$Param4 = '/project/project/page/';
	
	date_default_timezone_set('Asia/Yekaterinburg');
	$date = date("Y-m-d H:i:s");
	
	//Обновление статуса ACTIVE
	if (($date_active) <= ($date)) {
		$update_a = $mysqli->query("UPDATE `users1` SET active='0'  WHERE login='$login'");
	}
	
	
	if ($_POST['enter']) {
		$_SESSION['SEARCH'] = ($_POST['text']);
}
	if (!$_SESSION['SEARCH']) echo "<h4 class='text-center popular'>Слово для поиска не указано</h4>";
	
	if ((stristr($_SESSION['SEARCH'], $ee)) || (stristr($_SESSION['SEARCH'], $ee1)) || (stristr($_SESSION['SEARCH'], $ee2))) {
		echo "<h4 class='text-center popular'>Указан недопустимый символ в поиске</h4>";
		exit();
	} 
	
	
	$Count = mysqli_fetch_row($mysqli->query("SELECT COUNT(money) FROM `dream1` INNER JOIN `users1` ON users1.login=dream1.login WHERE (dream1.name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream_name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date')"));
		
if ($Count[0]) {
	
	if (!$Param['page']) {
		$Param['page'] = 1; 
		
		$Result = $mysqli->query("SELECT * FROM `dream1` INNER JOIN `users1` ON users1.login=dream1.login WHERE (dream1.name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream_name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date')  ORDER BY `dream1`.`id` DESC LIMIT 0, 8");
	} else {
		$Start = ($Param['page'] - 1) * 8;
$Result = $mysqli->query(str_replace('START', $Start, "SELECT * FROM `dream1` INNER JOIN `users1` ON users1.login=dream1.login WHERE (dream1.name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream_name LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date') OR (dream1.dream LIKE '%$_SESSION[SEARCH]%' AND active = '1' AND date_active >= '$date')  ORDER BY `dream1`.`id` DESC LIMIT START, 8"));
	}

?>
<ul class="pagination justify-content-center">
		<?php PageSelector($Param4, $Param['page'], $Count);  ?>
	</ul>

<div class='container'>
	<div class='card-deck'>
	
<?php
	
	while ($r_2=mysqli_fetch_assoc($Result))
	{
	$rating2=$r_2['rating'];
	$sum = $mysqli->query("SELECT SUM(amount) FROM payment WHERE login='$r_2[name]'");
	$row2 = mysqli_fetch_array($sum);
	$row3 = round ($row2[0], 3);
	$x = $row3*10/100;
	$row4 = $row3 - $x;
	$d = round (($row4/$r_2['money'])*100, 2);
		
		
		if ($r_2['avatar'] == "") ($r_2['avatar']= 'default.jpg');
		echo "
		<div class='row row-cols-1'>
		<div class='card one mt-5 mr-3'>
						<img src='/avatars/".$r_2['avatar']."' class='card-img-top rounded-circle mx-auto d-block' style='width: 255px; height: 255px; object-fit:cover' alt='...'>
							<div class='card-body mx-auto d-block' style='width:280px;'>
								<h5 class='card-title'>".$r_2['dream_name']."</h5>
								<p class='card-text'>".$r_2['dream']."</p>
							</div>
								<b >Прогресс достижения: $d%</b>
			 						<div class='progress ' style='width:240px;'>
 			 						<div class='progress-bar progress-bar-striped active progress-bar-animated ' role='progressbar'
  									aria-valuenow='$d' aria-valuemin='0' aria-valuemax='100' style='width:$d%'>
  			 						</div> 
  			 						</div><br>
								<a href='/users/".$r_2['id']."' class='btn btn-primary ' style='width:180px;'>Узнать подробнее</a>
									<div class='card-footer' style='border: 0px; background-color: white;'>
      									<small class='text-muted'>".$r_2['category']."</small>";
										echo rating2($rating2); 
    								echo "</div>
							</div>
  							</div>" ;}
	
} else echo '<h1 class="text-center popular">Ничего не найдено =(</h1>';
	
?>
</div>
	</div>

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

</body>
</html>