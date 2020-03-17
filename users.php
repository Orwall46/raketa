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
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?166"></script>
  	<script type="text/javascript">
		 VK.init({apiId: 7318388, onlyWidgets: true});
	</script>
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
      <li class="nav-item dropdown active">
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
      <li class="nav-item">
        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
	</nav>
</header>

<?php
	
	
	$q_3=$mysqli->query("SELECT * FROM users1 WHERE id='$Module'"); 
	while ($r_3=mysqli_fetch_assoc($q_3)) {
	$login=$r_3['login'];
	$id=$r_3['id'];
    $name=$r_3['name'];
    $birthday=$r_3['birthday'];
    $social=$r_3['social'];
	$email=$r_3['email'];
	$gender=$r_3['gender'];
	$active = $r_3['active'];
	$date_active = $r_3['date_active'];
	$date_buy = $r_3['date_buy'];
	$rating = $r_3['rating'];
	}
	
	$asd=$mysqli->query("SELECT * FROM `aboutuser1` WHERE `login` = '{$login}'");
	while($row9 = mysqli_fetch_array($asd)){
    $interesi=$row9['interesi'];
    $love_music=$row9['love_music'];
    $love_film=$row9['love_film'];
	$love_book=$row9['love_book'];
	$love_game=$row9['love_game'];
	$about = $row9['about'];
	$work = $row9['work'];
	$position = $row9['position'];
	}
	
	$asd2=$mysqli->query("SELECT * FROM `dream1` WHERE `login` = '{$login}' AND archive =''");
	while($row92 = mysqli_fetch_array($asd2)){
    $video=$row92['video'];
	$url = $row92['url'];
    $money1=$row92['money'];
	$money = number_format($money1, 2, ',', ' ');
    $total_sum=$row92['total_sum'];
	$dream_name=$row92['dream_name'];
	$dream=$row92['dream'];
	$dream_full = $row92['dream_full'];
	$category = $row92['category'];
	$archive = $row92['archive'];
	}
	
	$asd3=$mysqli->query("SELECT * FROM `dream2` WHERE `login` = '{$login}'");
	while($row93 = mysqli_fetch_array($asd3)){
    $video2=$row93['video2'];
	$url2=$row93['url2'];
	$dream_name2=$row93['dream_name2'];
	$dream2=$row93['dream2'];
	$dream_full2 = $row93['dream_full2'];
	$category2 = $row93['category2'];
	$archive2 = $row93['archive2'];
	}
	
	$a = end(explode('/', $video));
	$a3 = end(explode('/', $video2));
	
	if ($id != $Module) 
		exit ("<br><h2 class='text-center'>Страница не найдена =(</h2>"); 
	
	$q_4=$mysqli->query("SELECT * FROM payment WHERE login='$name'");
	while ($r_4=mysqli_fetch_assoc($q_4)) {
		$amounts = $r_4['amount'];
		$y = $amounts*10/100;
		$amount = number_format($amounts - $y, 2, ',', ' ');
		$from = $r_4['ot_kogo'];
		$date = $r_4['date'];
	}
	if(!empty($_SESSION['logged_user'])){
	$x=$_SESSION['logged_user']->id;
	$result=$mysqli->query("SELECT * FROM users1 WHERE id=$x");
	while($row = mysqli_fetch_array($result)){
    $names=$row['name'];
	$id2 = $row['id'];
	$emails = $row['email'];
	$active = $row['active'];
	$date_active = $row['date_active'];
	}} else;
	
	date_default_timezone_set('Asia/Yekaterinburg');
	$dates = date("Y-m-d H:i:s");
	
	//Обновление статуса ACTIVE
	if (($date_active) <= ($dates)) {
		$update_a = $mysqli->query("UPDATE users1 SET active='0'  WHERE login='$names'");
	}
	
	$q_5 = $mysqli->query("SELECT * FROM users1 WHERE name='$from'");
	while ($r_5=mysqli_fetch_assoc($q_5)){
		$ids=$r_5['id'];
	}
	
	$sum = $mysqli->query("SELECT total_sum FROM dream1 WHERE login='$login' AND archive =''");
	$row2 = mysqli_fetch_array($sum);
	$row3 = round ($row2[0], 3);
	$x = $row3*10/100;
	$row4 = number_format($row3 - $x, 2, ',', ' ');
	if ($money == '') {echo ""; } else 
	$d = round (($row3/$money1)*100, 2);
	
	
	if ($from == "Неизвестный гость") {
		$ids = $id;
	}
?>	

<?php
$avatar= getAvatar ($id);
if ($avatar ==  "") $avatar = "default.jpg";
?>

	
<div class="container">
	<div class="row mt-2">
	
			<div class="form-group col-md-3">
				
				<div class="card one" style="width: 18rem;">
					<div class="shadow-lg p-3 mb-5 bg-white rounded">
						
						<?php echo "<img src='/avatars/$avatar' class='card-img-top rounded-circle mx-auto d-block' style='width: 255px; height: 255px; object-fit:cover; margin-top: 5%;' alt='...'>"; ?>
  							<div class="card-body">
    							<?php echo "
									<h5 class='card-title text-center''>Укажите сумму перевода</h5>
									<small>Минимальная сумма перевода 150&#x20bd; </small>
									<form action='/free' method='POST'>
										<input type='number' min='150' name='AMOUNT' value='150' class='form-control'><br>
											<input type='hidden' name='id' value='$id'>
											<input type='hidden' name='froms' value='$names'>
											<input type='hidden' name='id2' value='$id2'>"?>
										  	  <?php if ($id ==$id2) : ?>
											  <?php echo "Не честно себе самому помогать =)" ?>
											    <?php else : ?>
								 <?php if ($dream == "") : ?>
											  <?php echo "У данного Автора еще нет мечты" ?>
											  <?php else : echo "
											 <button type='submit' name='send' class='btn btn-primary mx-auto d-block'>Помочь!</button>";?> 
										      <?php endif; ?> 
										      <?php endif; ?></form>
								
								
								
								
 	 						</div>
					</div>
				</div>
				
				
				<div class="card one" style="width: 18rem;">
					<div class="shadow-lg p-3 mb-5 bg-white rounded">
						<div class="card-body">
							<p class="card-text">
							<?php if ($amount) : ?>
							Последний перевод от:<br>
							<?php echo "<a href='/users/".$ids."'>$from</a><br>" ?>
							на сумму <? echo "<b>$amount</b>"?> &#x20bd; <br>
							<? echo $date ?><br/>
							<?php echo"
							<b>Прогресс достижения: $d%</b>
							 <div class='progress'>
							 <div class='progress-bar progress-bar-striped active progress-bar-animated' role='progressbar'
  							aria-valuenow='$d' aria-valuemin='0' aria-valuemax='100' style='width:$d%'>
							 </div> 
							 </div>" ?>
							<?php else : ?>
							Переводов еще нет
							<p>Вы можете стать первым, кто поддержит проект!</p>
							<?php endif; ?>
							</p>
						</div>
					</div>
				</div>
				
			</div>
		
		
		<div class="form-group col-md-8 ml-auto">
			
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Общее</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Мечта</a>
  </li>
	 <li class="nav-item">
    <a class="nav-link" id="dream-tab" data-toggle="tab" href="#dream" role="tab" aria-controls="dream" aria-selected="false">Dream Comes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Исполненные мечты</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
	  
	<div class="card one">
				  <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Общая информация</h5>
						 <p class="card-text">
						
							 <?php echo rating($rating); ?>
						<?php if (!empty($name)) : ?>
						<?php echo "<p><b>ФИО: </b>$name</p>" ?>
						<?php else : echo "";?>
						<?php endif; ?>
							 
						<?php if (!empty($birthday)) : ?>
						<?php echo "<p><b>Полных лет: </b>"; echo getFullYears($birthday); "</p>" ?>
						<?php else : echo "";?>
						<?php endif; ?>
						
						 <?php if (!empty($social)) : ?>
						 <?php echo "<p><b>Соц. сеть:</b> <a href = '$social' target = '_blank'>$name</a></p>" ?>
					 	 <?php else : echo "";?>
					 	 <?php endif; ?>
 					 	 </p>
  					 </div>
				   </div>
				</div>
	  
	  		<div class="card one">
				  <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Краткая информация о себе</h5>
						 <p class="card-text">
						 
						 <p><b>О себе: </b> 
						 		<?php if ($about == "") : ?>
							 Автор не указал информацию о себе =(
							 <?php else : ?>
								  <?php $rez = str_replace("
", "<br>", $about); ?>
							 <? echo  "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($interesi == "") : ?>
						 	<?php else : ?>
							<p><b>Интересы: </b> 
								 <?php $rez = str_replace("
", "<br>", $interesi); ?>
							 <? echo  "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($love_music == "") : ?>
							 <?php else : ?>
						 <p><b>Любимая музыка: </b> 
								 <?php $rez = str_replace("
", "<br>", $love_music); ?>
							 <? echo "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($love_film == "") : ?>
							<?php else : ?>
						 <p><b>Любимые фильмы: </b> 
								 <?php $rez = str_replace("
", "<br>", $love_film); ?>
							 <? echo "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($love_book == "") : ?>
							 <?php else : ?>
						 <p><b>Любимые книги: </b> 
								<?php $rez = str_replace("
", "<br>", $love_book); ?>
							 <? echo  "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($work == "") : ?>
							<?php else : ?>
						 <p><b>Место работы: </b> 
								<?php $rez = str_replace("
", "<br>", $work); ?>
							 <? echo "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
						 <?php if ($position == "") : ?>
							<?php else : ?>
						 <p><b>Должность: </b> 
								<?php $rez = str_replace("
", "<br>", $position); ?>
							 <? echo  "<br>$rez" ;?>
							<?php endif; ?>
						 	</p>
							  
 					 	 </p>
  					 </div>
			 	   </div>
				</div>
	
			<div class="card one">
				 <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Комментарии</h5>
						 <p class="card-text">
							<div id="vk_comments"></div>
							<script type="text/javascript">
							VK.Widgets.Comments("vk_comments", {limit: 5, attach: "*"});
							</script>
 					 	 </p>
  					 </div>
				</div>
				</div>
			
	  
	</div>


<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
	
	<div class="card one">
				 <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Мечта</h5>
						 <p class="card-text">
							 <?php if (($dream_name == "") || ($archive == "1")) : ?>
							 <?php echo "У Автора еще нет зарегистированного проекта.<br>
							 <a href='/project' class='btn btn-light btn-sm' role='button' aria-pressed='true'>Помочь другим!</a>"; ?>
							 <?php else : ?>
							<b>Категория: </b><? echo $category;?>
						 <p><b>Название желания: </b><? echo $dream_name;?></p>
							<b>Краткое описание мечты:</b>
							<p><? echo $dream;?></p>
							<b>Дополнительная информация:</b>
							<p><?php $rez2 = str_replace("
", "<br>", $dream_full); ?>
							<? echo  $rez2 ;?></p>
						  <?php if (empty($url)) : ?>
						  <?php else : ?>
						 <b>Ссылка на ознакомление:</b>
						 <p><a href="<? echo $url;?>" target="_blank">Нажмите сюда, чтобы узнать подробнее о <? echo $dream_name;?></a></p>
						<?php endif; ?>
						 <?php if (empty($video)) : ?>
							  <?php else : ?>
					<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $a ?>" allowfullscreen></iframe>
					</div>
						 	<?php endif; ?>
						 	<?php endif; ?>
 					 	 </p>
  					 </div>
					</div>
				</div>
	
	<div class="card one">
				 <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
						 <?php if (($dream_name == "") || ($archive == "1")) : ?>
    					<h5 class="card-title text-center">Информация по проекту</h5>
						 <p class="card-text">
							Автор еще не зарегистрировал свою мечту!<br>
 					 	 </p>
						 <?php else : ?>
						 <h5 class="card-title text-center">Финансы</h5>
						 <p class="card-text">
							<p><b>Необходимая сумма: <? echo $money;?> &#x20bd;</p></b>
								<b>Собранная сумма:</b>
									<?php echo "<b>$row3 &#x20bd;</b>";?>
					 <?php endif; ?>
  					 </div>
				</div>
				</div>
		
</div>
	
	
	<div class="tab-pane fade" id="dream" role="tabpanel" aria-labelledby="dream-tab"><br>
	
	<div class="card one">
				 <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Помоги осуществить Dream Comes мечту</h5>
						 <p class="card-text">
							<?php if (($dream2 == "") || ($archive2 == "1")) : ?>
							 <?php echo "У Автора еще нет зарегистрированного проекта.<br>
							 <a href='/project' class='btn btn-light btn-sm' role='button' aria-pressed='true'>Посмотреть другие проекты</a>"; ?>
							 <?php else : ?>
							<b>Категория: </b><? echo $category2;?>
						 <p><b>Название желания: </b><? echo $dream_name2;?></p>
							<b>Краткое описание мечты: </b>
							<p><? echo $dream2;?></p>
							<b>Дополнительная информация: </b>
							<p><?php $rez2 = str_replace("
", "<br>", $dream_full2); ?>
							<? echo  $rez2 ;?></p>
						 <?php if (empty($url2)) : ?>
						  <?php else : ?>
						 <b>Ссылка на ознакомление:</b>
						 <p><a href="<? echo $url2;?>" target="_blank">Нажмите сюда, чтобы узнать подробнее о свойствах <? echo $dream_name2;?></a></p>
						<?php endif; ?>
						 <?php if (empty($video2)) : ?>
							  <?php else : ?>
					<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $a3 ?>" allowfullscreen></iframe>
					</div>
						 	<?php endif; ?>
						 	<?php endif; ?>
						
 					 	 </p>
  					 </div>
					</div>
				</div>


<div class="card one">
				 <div class="shadow-lg p-3 mb-5 bg-white rounded">
					 <div class="card-body">
    					<h5 class="card-title text-center">Откликнуться на Желание</h5>
						 <p class="card-text">
							<?php if (($dream2 == "") || ($archive2 == "1")) : ?>
							 <?php echo "У Автора еще нет зарегистрированного проекта.<br>
							 <a href='/project' class='btn btn-light btn-sm' role='button' aria-pressed='true'>Посмотреть другие проекты</a>"; ?>
							 <?php else : ?>
							 <small>Расскажите, как Вы можете помочь осуществить мечту. <br>Данное письмо будет отправлено на e-mail пользователя. Поэтому, укажите свои контакты в письме, чтобы проще было держаться на связи</small>
							 <form name="name" method="post" action="">
					 	<div class="form-row">
					 	
					 		<div class="form-group mx-auto">
					 			<label for="name">Укажите Ваше Имя</label>
      							<input type="text" id="name" size="40" name="name" placeholder="Введите свое имя" class="form-control">
							</div>
							
							<div class="form-group mx-auto">
					 			<label for="email5">Укажите Вашу почту для ответа</label>
      							<input type="email" size="40" id="email5" name="email5" placeholder="Введите свою почту" class="form-control">
							</div>
							
							
								<label for="message">Расскажите, как Вы можете помочь?</label>
								<textarea class="form-control" name="message" id="message"></textarea>
  							
						 </div><br>
						 <button type="submit" name="send" class="btn btn-outline-success mx-auto">Отправить письмо</button>
					 </form>
						 	<?php endif; ?>
						
 					 	 </p>
  					 </div>
					</div>
				</div>
	
</div>

<?php
   $to = "support@dreamcomes.ru";
		   $err = "";
		   $name = htmlspecialchars (trim($_POST['name']));
		   $email5 = htmlspecialchars (trim($_POST['email5']));
		   $message = htmlspecialchars (trim($_POST['message']));
		   
		  if(isset($_POST["send"])){
			   
			   if (($name) == "" && ($email5) == "" && ($message) == "")
				$err = "Заполните все поля"; 
			   if (($name) == "" || ($email5) == "" || ($message) == "")
				$err = "Вы заполнили не все поля"; 
			   else if (trim($_POST['name']) == "")
					$err = "Ваше имя не указано"; 
			   else if(!((strpos($email5, ".") > 0) && (strpos($email, "@")>0)))	
					$err = "Введен не верный email";
			  else if (trim($_POST['message']) == "")
					$err = "Вы не указали сообщение"; 
			   if ($err != "") { 
				echo "<script>
  alert('$err');
</script>";
			   					}	else {
			   
			   
			$msg = "Отклик на Ваше Желание:<br> Сообщение отправил(а): <b>".$_POST['name']."</b><br><br><b>Текст сообщения:</b><br>".$_POST['message']."<br><br>
			Почта для ответа была указана: ".$_POST['email5']."<br><br>
			------------------------<br><br>

			Личные данные пользователя:<br>
			Имя: <b>$names</b><br>
			Почта: <b>$emails</b>";
				   
			

			$subject = "=?utf-8?B?".base64_encode("Отклик на помощь в осуществлении Вашего Желания")."?=";	
			

			$headers = "From: $to\r\nReply-to: $to\r\nContent-type: text/html; charset=utf-8\r\n";
			
			

			$success = mail ($email, $subject, $msg, $headers);
				   
				   
				echo "<script>
  alert('Письмо успешно отправлено');
</script>";
		   							}}

?>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>

	<?php 
	
	$asd4=$mysqli->query("SELECT * FROM `dream1` WHERE `login` = '{$login}'");
	while($row94 = mysqli_fetch_array($asd4)){
    	$mmoney1 = $row94['money'];
		$mmoney = number_format($mmoney1, 2, ',', ' ');
		$mmmoney1 = $row94['total_sum'];
		$mmmoney = number_format($mmmoney1, 2, ',', ' ');
		if ($mmoney > $mmmoney) $yes = '<i class="far fa-frown"></i>';
		else $yes = '<i class="fas fa-check"></i>';
		$a2 = end(explode('/', $row94['video']));
		if ($a2 == "") 
			$a2 = 'QrhjP05O3Ic';
		$rez2 = str_replace("
", "<br>", $row94['dream_full']);
		echo "
		<div class='card one'>
				 <div class='shadow-lg p-3 mb-5 bg-white rounded'>
					 <div class='card-body'>
    					<h5 class='card-title text-center'>Желание, которое исполнилось, благодаря Dream Comes</h5>
						 <p class='card-text'>";
						 if ($row94['archive'] == "") echo "
						 	У данного Автора еще не исполнилось желание. <br>
							После того, как Автор успешно завершит свой Проект, он обязательно появится здесь!"; else echo "
							<b>Категория </b> $row94[category]
							<p><b>Название желания </b>$row94[dream_name]</p>
							<b>Описание желания</b>
							<p>$row94[dream]</p>
							<b>Дополнительная информация по желанию</b>
							<p>$rez2</p>
							<div class='embed-responsive embed-responsive-16by9'>
						  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/$a2' allowfullscreen></iframe>
							</div><br>
							<p class='text-center'><b>Необходимая сумма: $mmoney &#x20bd;</p></b>
					 <p class='text-center'><b>Собранная сумма</b>
									<b>$mmmoney &#x20bd;</b><br> $yes</p><br>" ;}
	
?>
	</div></div></div>
	
<?php 
	
	$asd5=$mysqli->query("SELECT * FROM `dream2` WHERE `login` = '{$login}'");
	while($row95 = mysqli_fetch_array($asd5)){
    
	
		
		$a2 = end(explode('/', $row95['video2']));
		if ($a2 == "") 
			$a2 = 'QrhjP05O3Ic';
		
		$b2 = end(explode('/', $row95['resultvideo2']));
		if ($b2 == "") 
			$b2 = 'QrhjP05O3Ic'; // Потом надо добавить видео - где указано, что автор не подлелился результатом
		$rez2 = str_replace("
", "<br>", $row95['dream_full2']);
		echo "
		<div class='card one'>
				 <div class='shadow-lg p-3 mb-5 bg-white rounded'>
					 <div class='card-body'>
    					<h5 class='card-title text-center'>Исполненные Dream Comes мечты</h5>
						 <p class='card-text'>";
						 if ($row95['archive2'] == "") echo "
						 	У данного Автора еще не исполнилось желание.
После того, как Автор успешно завершит свой Dream Comes Проект, он обязательно появится здесь!"; else echo "
							<b>Категория: </b> $row95[category2]
							<p><b>Название желания: </b>$row95[dream_name2]</p>
							<b>Описание желания:</b>
							<p>$row95[dream2]</p>
							
							<b>Дополнительная информация:</b>
							<p>$rez2</p>
							<div class='embed-responsive embed-responsive-16by9'>
						  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/$a2' allowfullscreen></iframe>
						  </div><br>
						  
						  <b>Видео-отчет:</b>
						 <div class='embed-responsive embed-responsive-16by9'>
						  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/$b2' allowfullscreen></iframe>
						  </div><br>
						  <b>Благодарственное письмо:</b>
						  <p>$row95[result2]</p><br>
						  </div></div></div>";}
	
?>
</div>
	</div></div>

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
				<p>+7 963 851 63 10 </p>
			
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