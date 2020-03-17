<?php
require "db.php";
$x=$_SESSION['logged_user']->id;

if ( !isset($_SESSION['logged_user'])) {
	echo "<script>alert('Доступ запрещен');location.href='/';</script>";
}

if ($_POST) {
    $f_err     = 0; //вспомогательная переменная
    $types     = array(
        '.jpg',
        '.JPG',
        '.jpeg',
        '.gif',
        '.bmp',
        '.png'
    ); //поддерживаемые форматы загружаемых файлов
    $max_size  = 5020500; //максимальный размер загружаемого файла (5000-МБ)
    $path      = 'avatar/full/'; //директория для загрузки
    $path_mini = 'avatar/thumb/'; //директория для загрузки миниатюры
    $fname     = $_FILES['file']['name'];
    $ext       = substr($fname, strpos($fname, '.'), strlen($fname) - 1); //определяем тип загружаемого файла

    //проверка на соответствие формата
    if (!in_array($ext, $types)) {
        $f_err++;
        $mess = '<p style="color:red;">Загружаемый файл не является картинкой</p>';
    }

    //проверка размера файла
    if (filesize($_FILES['file']['tmp_name']) > $max_size) {
        $f_err++;
        $mess = '<p style="color:red;">Размер загружаемой картинки превышает 5 Mb</p>';
    }

    //если файл успешно прошел проверку
    //перемещаем его в заданную директорию из временной
    if ($f_err == 0) {
        move_uploaded_file($_FILES['file']['tmp_name'], $path . $fname);

        //путь к загруженному файлу
        $source_src = $path . $fname;

        //создаем путь и имя миниатюры
        $new_name     = crypt($fname) . $ext;
        $resource_src = $path_mini . $new_name;

        //получаем параметры загруженного файла
        $params = getimagesize($source_src);

        switch ($params[2]) {
            case 1:
                $source = imagecreatefromgif($source_src);
                break;
            case 2:
                $source = imagecreatefromjpeg($source_src);
                break;
        }

        //если высота больше ширины
        //вычисляем новую ширину
        if ($params[1] > $params[0]) {
            $newheight = 500;
            $newwidth  = floor($newheight * $params[0] / $params[1]);
        }
        //если ширина больше высоты
        //вычисляем новую высоту
        if ($params[1] < $params[0]) {
            $newwidth  = 500;
            $newheight = floor($newwidth * $params[1] / $params[0]);
        }

        //создаем миниатюру загруженного изображения
        $resource = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($resource, $source, 0, 0, 0, 0, $newwidth, $newheight, $params[0], $params[1]);
        imagejpeg($resource, $resource_src, 40); //80 качество изображения


        //выводим сообщение
        $mess = '<center><br><p style="color:green;">Изображение загружено !</p></center>';
        $ok   = 1;
    }
}
?>
<center><br><h3>Загрузка аватара</h3></center>
<!--вывод сообщений--><?= $mess ?>
<?php

?>
<center><br>     
<p><form method="POST"  enctype="multipart/form-data" name="form33">
<table id="upload1" ><tr><td>
</td> <td><span class="psevdoFile"><input id="psevdoFileValue" class="inputFileText" value="выберете файл" style="color:#828282;" type="text"/>
    <input class="fileInput" type="file" size="1" onchange="document.getElementById('psevdoFileValue').value = this.value" name="file"/>
    </span></td></tr></tr>
</table>

<table>
<tr><td><br><input type='submit' name='submit' class='pictures-btn' value='Загрузить'></a></td></tr>
</table></form></p>
</center>
<?php
$file = str_replace($server['DOCUMENT_ROOT'], '/', $path_mini . $new_name); // получить путь вида '/img/avatars/15.jpg'
mysql_query("UPDATE users SET avatar='$file' WHERE id='$x';"); //Добавление в БД.
?>