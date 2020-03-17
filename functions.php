<?php
	
	function getAvatar ($id) {
			$mysqli = connectDB();
			$result_set = $mysqli->query("SELECT avatar FROM users1 WHERE id='$id'");
			$row = $result_set->fetch_assoc ();
			closeDB($mysqli);
			return $row["avatar"];
		}	


	function isSecurity ($avatar) {
		$name = $avatar["name"];
		$type = $avatar["type"];
		$size = $avatar["size"];
		$blacklist = array(".php", "phtml", ".php3", ".php4");
		foreach ($blacklist as $item){
			if (preg_match("/$item\$/i", $name)) return false;
		}
		if (($type != "image/gif") && ($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;
		if ($size > 80 *1024 *1024 ) return false;
		return true;
	}
	
	function loadAvatar ($avatar, $id) {
		$type = $avatar["type"];
		$uploaddir = "avatars/";
		$name = md5(microtime()).".".substr($type, strlen("image/"));
			$uploadfile = $uploaddir.$name;
		if (move_uploaded_file($avatar["tmp_name"], $uploadfile)) {
			setAvatar ($id, $name);
			return true;
		} 
		else return false;
	}

	function setAvatar ($id, $name){
		$mysqli = connectDB();
		$mysqli->query("UPDATE users1 SET avatar='$name' WHERE id='$id'");
		closeDB($mysqli);
	}


//Выбор страницы в разделе проекты
	function PageSelector($p1, $p2, $p3, $p4 = 8) {
/*
$p1 - URL 
$p2 - Текущая страница (из $Param['page'])
$p3 - Кол-во проектов
$p4 - Кол-во записей на странице
*/
$Page = ceil($p3[0] / $p4); //делим кол-во проектов на кол-во записей на странице.
if ($Page > 1) { //А нужен ли переключатель?
echo '<div class="PageSelector">';
	
for($i = ($p2 - 3); $i < ($Page + 1); $i++) {
if ($i > ($p2 + 3)) {break; }
if ($i > 0 and $i <= ($p2 + 3)) {
if ($p2 == $i) $Swch = 'SwchItemCur';
else $Swch = 'SwchItem';
echo '<a class="'.$Swch.'" href="'.$p1.$i.'">'.$i.'</a>';
}
}
echo '</div>';
}
}

function getFullYears($birthday) {
							$datetime = new DateTime($birthday);
							$interval = $datetime->diff(new DateTime(date("Y-m-d")));
							return $interval->format("%Y");}


?>