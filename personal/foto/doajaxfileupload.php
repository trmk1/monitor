<?php

if (isset($_POST['teachedit']))  {$teachedit = $_POST['teachedit'];   		if ($teachedit == '') 	{unset($teachedit);}}
// echo   $teachedit;
// echo  "---", $teachedit, "***";
$error = "";
$msg = "";
$fileElementName = 'fileToUpload';
$i = 0;
$files_count = sizeof($_FILES[$fileElementName]["name"]);

for ($i = 0; $i < $files_count-1; $i++) {	
	if(!empty($_FILES[$fileElementName]['error'][$i]))
	{
		switch($_FILES[$fileElementName]['error'][$i])
		{

			case '1':
				$error = 'размер загруженного файла превышает размер установленный параметром  ';
				break;
			case '2':
				$error = 'размер загруженного файла превышает размер 15 кбайт. ';
				break;
			case '3':
				$error = 'загружена только часть файла ';
				break;
			case '4':
				$error = 'файл не был загружен (Пользователь в форме указал неверный путь к файлу). ';
				break;
			case '6':
				$error = 'неверная временная дирректория';
				break;
			case '7':
				$error = 'ошибка записи файла на диск';
				break;
			case '8':
				$error = 'загрузка файла прервана';
				break;
			case '999':
			default:
				$error = 'No error code avaiable';
		}
	}elseif(empty($_FILES[$fileElementName]['tmp_name'][$i]) || $_FILES[$fileElementName]['tmp_name'][$i] == 'none')
	{
		$error = 'No file was uploaded..';
	}else 
	{
			if (file_exists("upload/" . $_FILES[$fileElementName]['name'][$i])){
      			$error =$_FILES[$fileElementName]['name'][$i] . " уже существует. ";
      		}
    		else{
    			//$msg .= " File Name: " . $_FILES[$fileElementName]['name'][$i] . "<br/>";
    			//$msg .= " File Temp Name: " . $_FILES['fileToUpload']['tmp_name'] . "<br/>";
    			$msg .= " File Type: " . $_FILES[$fileElementName]['type'][$i] . "<br/>";
				$msg .= " Файл загружен размер: " . (@filesize($_FILES[$fileElementName]['tmp_name'][$i])/ 1024)."Kb";
				$imjfail=$teachedit.".jpg";
				move_uploaded_file($_FILES[$fileElementName]['tmp_name'][$i], "upload/".$imjfail);
				$im="upload/".$imjfail;				
				chmod($im, 0777);	
			/* 	if(!chmod ("upload/", 0755))
				{
				echo "Ой, а ваш хостинг это запретил";
				break;
				} */
			}
			//for security reason, we force to remove all uploaded file
			@unlink($_FILES[$fileElementName][$i]);		
	}		                      
	echo "{";
echo				 $error ;
echo				"сообщение:'" . $msg . ".  ";
echo "}";
}
?>





<?php
/* $uploads_dir = '/uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = $_FILES["pictures"]["name"][$key];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
} */
?>
