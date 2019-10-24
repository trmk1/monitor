<html>
	<head>
		<title>Загрузка фотографии</title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />


		
		
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.MultiFile.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
	<!--	-->
<script type="text/javascript">
$(document).ready(function(){
	  
$('.MultiFile').MultiFile({ 
	accept:'jpg|gif', max:1, STRING: { 
		remove:'удалить',
		file:'$file', 
		selected:'Выбраны: $file', 
		denied:'Неверный тип файла: $ext!', 
		duplicate:'Этот файл уже выбран:\n$file!' 
	} 
});		  
	  
$("#loading").ajaxStart(function(){
	$(this).show();
})
.ajaxComplete(function(){
	$(this).hide();
});
	  

$('#uploadForm').ajaxForm({
	beforeSubmit: function(a,f,o) {
		o.dataType = "html";
		$('#uploadOutput').html('Submitting...');
	},
	success: function(data) {
		var $out = $('#uploadOutput');
		$out.html('Form success handler received: <strong>' + typeof data + '</strong>');
		if (typeof data == 'object' && data.nodeType)
			data = elementToString(data.documentElement, true);
		else if (typeof data == 'object')
			data = objToString(data);
		$out.append('<div><pre>'+ data +'</pre></div>');
	}
});
});
</script>	
	</head>

<body> 
    <form id="uploadForm" action="doajaxfileupload.php" method="post" enctype="multipart/form-data">
    	<input name="MAX_FILE_SIZE" value="100000" type="hidden"/>
							<?
							if (isset($_GET['teachedit']))  {$teachedit = $_GET['teachedit'];   		if ($teachedit == '') 	{unset($teachedit);}}
						
							echo "<input name='teachedit' value=$teachedit type='hidden'/>";
								// echo "<input name='teachedit' value=$teachedit type='text'/>";
							// echo $teachedit;

							?> 
						
		
     	Фотографии формата *.jpg (размер не более 100 кб.):
		<br>						
		<a href='http://www.trmk.idhost.kz/1/personal/foto/SmallFoto.zip'>Программа для уменьшения размера изображения  </a>  
		<input name="fileToUpload[]" id="fileToUpload" class="MultiFile" type="file"/>
      	<input value="загрузить" type="submit"/>
	</form>
 	<img id="loading" src="loading.gif" style="display:none;"/>   
    <div id="uploadOutput"></div> 
	      <a href="javascript:window.close();">Закрыть</a>
</body>
</html>