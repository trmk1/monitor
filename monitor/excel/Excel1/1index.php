<?
include ($_SERVER['DOCUMENT_ROOT'].'/1/blocks/verh.php');

 ?>
	<!--Тело страницы начало -->


<?php 
ini_set("memory_limit", "1024M"); 
ini_set("max_execution_time", "90");
?>


<?php

/**http://swblog.ru/articles/programming/sozdaem-otchety-v-excel-na-php.html
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Otdel obrazovanij ".$raion1)
							 ->setLastModifiedBy("Alibaev Talgat")
							 ->setTitle("Generated programm www.trmk.idhost.kz (talgat1@mail.ru)")
							 ->setSubject("www.trmk.idhost.kz")
							 ->setDescription("www.trmk.idhost.kz ")
							 ->setKeywords("Monitoring")
							 ->setCategory("Kazahstan, SKO,  Tainsha");



							 
							 
							 
// локализация							 
							 
	
$locale = 'ru';
$validLocale = PHPExcel_Settings::setLocale($locale);
if (!$validLocale) {	echo 'Unable to set locale to '.$locale." - reverting to en_us<br />\n"; }
	
							 
			

 // начало циклов по язику обучению и свод
//$jaz_vib='русский';
	$jaz_1vib = mysql_query("SELECT * FROM jaz_1  "); 
	while($jaz33 = mysql_fetch_array($jaz_1vib))
	{ 
		$jaz_vib=$jaz33['jaz']	;					
								
					 // начало циклов предметов 						 
					 
					 $result33 = mysql_query("SELECT * FROM predmetsp  "); //predmetsp11
					$s=0;
					// Так как запрос возвращает несколько строк, применяем цикл
					while($myrow33 = mysql_fetch_array ($result33))
								{  	
									$predmet=$myrow33['predmet'];
									
					$s=$s+1;				
					echo "<br> Load ".$s." - ".$predmet;
					
					$prd = mb_convert_encoding ($predmet ,"UTF-8" , "Windows-1251" );				

					// Создать новый лист под названием «Мои данные»
					$myWorkSheet = new PHPExcel_Worksheet($objPHPExcel, $prd);
					// Приложить лист «Мои данные» как первый лист в объекте PHPExcel

					$pr1= $raion1 ;
					$pr1 = mb_convert_encoding ($pr1 ,"UTF-8" , "Windows-1251" );

					$jaz_vib1 = mb_convert_encoding ($jaz_vib ,"UTF-8" , "Windows-1251" );

					
					// Осторожно путанныца с кодировками
					$prr="по предмету ".$prd.", язык обучения - ".$jaz_vib1;
					include ('monit_in.php');
					
					$im_list=substr($predmet, 0, 15)."(".substr($jaz_vib, 0, 4).")";//
					$im_list = mb_convert_encoding ($im_list ,"UTF-8" , "Windows-1251" );

					{

					$objPHPExcel->setActiveSheetIndex(0)

					// заголовок таблицы// таблица 
					->setCellValue('A1', "Сводная таблица результатов текущего  успеваемости, промежуточного контроля \n и итоговой аттестации учащихся по школам ".$pr1)
					->setCellValue('A3', $prr )

					->setCellValue('C5', '1')
					->setCellValue('D5', '2')
					->setCellValue('E5', '3')
					->setCellValue('F5', '4')
					->setCellValue('G5', '5')
					->setCellValue('H5', '6')
					->setCellValue('I5', '7')
					->setCellValue('J5', '8')
					->setCellValue('K5', '9')
					->setCellValue('L5', '10')
					->setCellValue('M5', '11')
					->setCellValue('N5', 'итого')


					->setCellValue('C13', '1')
					->setCellValue('D13', '2')
					->setCellValue('E13', '3')
					->setCellValue('F13', '4')
					->setCellValue('G13', '5')
					->setCellValue('H13', '6')
					->setCellValue('I13', '7')
					->setCellValue('J13', '8')
					->setCellValue('K13', '9')
					->setCellValue('L13', '10')
					->setCellValue('M13', '11')
					->setCellValue('N13', 'итого')


					->setCellValue('C21', '1')
					->setCellValue('D21', '2')
					->setCellValue('E21', '3')
					->setCellValue('F21', '4')
					->setCellValue('G21', '5')
					->setCellValue('H21', '6')
					->setCellValue('I21', '7')
					->setCellValue('J21', '8')
					->setCellValue('K21', '9')
					->setCellValue('L21', '10')
					->setCellValue('M21', '11')
					->setCellValue('N21', 'итого')


					->setCellValue('C29', '1')
					->setCellValue('D29', '2')
					->setCellValue('E29', '3')
					->setCellValue('F29', '4')
					->setCellValue('G29', '5')
					->setCellValue('H29', '6')
					->setCellValue('I29', '7')
					->setCellValue('J29', '8')
					->setCellValue('K29', '9')
					->setCellValue('L29', '10')
					->setCellValue('M29', '11')
					->setCellValue('N29', 'итого')


					->setCellValue('C37', '1')
					->setCellValue('D37', '2')
					->setCellValue('E37', '3')
					->setCellValue('F37', '4')
					->setCellValue('G37', '5')
					->setCellValue('H37', '6')
					->setCellValue('I37', '7')
					->setCellValue('J37', '8')
					->setCellValue('K37', '9')
					->setCellValue('L37', '10')
					->setCellValue('M37', '11')
					->setCellValue('N37', 'итого')


					->setCellValue('C45', '1')
					->setCellValue('D45', '2')
					->setCellValue('E45', '3')
					->setCellValue('F45', '4')
					->setCellValue('G45', '5')
					->setCellValue('H45', '6')
					->setCellValue('I45', '7')
					->setCellValue('J45', '8')
					->setCellValue('K45', '9')
					->setCellValue('L45', '10')
					->setCellValue('M45', '11')
					->setCellValue('N45', 'итого')


					->setCellValue('C53', '1')
					->setCellValue('D53', '2')
					->setCellValue('E53', '3')
					->setCellValue('F53', '4')
					->setCellValue('G53', '5')
					->setCellValue('H53', '6')
					->setCellValue('I53', '7')
					->setCellValue('J53', '8')
					->setCellValue('K53', '9')
					->setCellValue('L53', '10')
					->setCellValue('M53', '11')
					->setCellValue('N53', 'итого')


					->setCellValue('C61', '1')
					->setCellValue('D61', '2')
					->setCellValue('E61', '3')
					->setCellValue('F61', '4')
					->setCellValue('G61', '5')
					->setCellValue('H61', '6')
					->setCellValue('I61', '7')
					->setCellValue('J61', '8')
					->setCellValue('K61', '9')
					->setCellValue('L61', '10')
					->setCellValue('M61', '11')
					->setCellValue('N61', 'итого')


					//->setCellValue('C69', '1')
					//->setCellValue('D69', '2')
					//->setCellValue('E69', '3')
					//->setCellValue('F69', '4')
					//->setCellValue('G69', '5')
					//->setCellValue('H69', '6')
					//->setCellValue('I69', '7')
					//->setCellValue('J69', '8')
					//->setCellValue('K69', '9')
					//->setCellValue('L69', '10')
					//->setCellValue('M69', '11')
					//->setCellValue('N69', 'итого')

					->setCellValue('B5', 'класс')
					->setCellValue('B6', 'количество учащихся')
					->setCellValue('B7', '5')
					->setCellValue('B8', '4')
					->setCellValue('B9', '3')
					->setCellValue('B10', '2')
					->setCellValue('B11', '% успеваемости')
					->setCellValue('B12', '% качества')
					->setCellValue('B13', 'класс')
					->setCellValue('B14', 'количество учащихся')
					->setCellValue('B15', '5')
					->setCellValue('B16', '4')
					->setCellValue('B17', '3')
					->setCellValue('B18', '2')
					->setCellValue('B19', '% успеваемости')
					->setCellValue('B20', '% качества')
					->setCellValue('B21', 'класс')
					->setCellValue('B22', 'количество учащихся')
					->setCellValue('B23', '5')
					->setCellValue('B24', '4')
					->setCellValue('B25', '3')
					->setCellValue('B26', '2')
					->setCellValue('B27', '% успеваемости')
					->setCellValue('B28', '% качества')
					->setCellValue('B29', 'класс')
					->setCellValue('B30', 'количество учащихся')
					->setCellValue('B31', '5')
					->setCellValue('B32', '4')
					->setCellValue('B33', '3')
					->setCellValue('B34', '2')
					->setCellValue('B35', '% успеваемости')
					->setCellValue('B36', '% качества')
					->setCellValue('B37', 'класс')
					->setCellValue('B38', 'количество учащихся')
					->setCellValue('B39', '5')
					->setCellValue('B40', '4')
					->setCellValue('B41', '3')
					->setCellValue('B42', '2')
					->setCellValue('B43', '% успеваемости')
					->setCellValue('B44', '% качества')
					->setCellValue('B45', 'класс')
					->setCellValue('B46', 'количество учащихся')
					->setCellValue('B47', '5')
					->setCellValue('B48', '4')
					->setCellValue('B49', '3')
					->setCellValue('B50', '2')
					->setCellValue('B51', '% успеваемости')
					->setCellValue('B52', '% качества')
					->setCellValue('B53', 'класс')
					->setCellValue('B54', 'количество учащихся')
					->setCellValue('B55', '5')
					->setCellValue('B56', '4')
					->setCellValue('B57', '3')
					->setCellValue('B58', '2')
					->setCellValue('B59', '% успеваемости')
					->setCellValue('B60', '% качества')
					->setCellValue('B61', 'класс')
					->setCellValue('B62', 'количество учащихся')
					->setCellValue('B63', '5')
					->setCellValue('B64', '4')
					->setCellValue('B65', '3')
					->setCellValue('B66', '2')
					->setCellValue('B67', '% успеваемости')
					->setCellValue('B68', '% качества')
					//->setCellValue('B69', 'класс')
					//->setCellValue('B70', 'количество учащихся')
					//->setCellValue('B71', '5')
					//->setCellValue('B72', '4')
					//->setCellValue('B73', '3')
					//->setCellValue('B74', '2')
					//->setCellValue('B75', '% успеваемости')
					//->setCellValue('B76', '% качества')

					->setCellValue('A5', 'I четверть')
					->setCellValue('A13', 'II четверть')
					->setCellValue('A21', 'III четверть')
					->setCellValue('A29', 'IV четверть')
					->setCellValue('A37', 'годовая')
					->setCellValue('A45', 'экзаменационная')
					->setCellValue('A53', 'ЕНТ')
					->setCellValue('A61', 'Итоговая')

					// заполннение цифровых данных
					->setCellValue('C6', $mon6[1])
					->setCellValue('C7', $mon7[1])
					->setCellValue('C8', $mon8[1])
					->setCellValue('C9', $mon9[1])
					->setCellValue('C10', $mon10[1])
					->setCellValue('C11', $mon11[1])
					->setCellValue('C12', $mon12[1])
					->setCellValue('C14', $mon14[1])
					->setCellValue('C15', $mon15[1])
					->setCellValue('C16', $mon16[1])
					->setCellValue('C17', $mon17[1])
					->setCellValue('C18', $mon18[1])
					->setCellValue('C19', $mon19[1])
					->setCellValue('C20', $mon20[1])
					->setCellValue('C22', $mon22[1])
					->setCellValue('C23', $mon23[1])
					->setCellValue('C24', $mon24[1])
					->setCellValue('C25', $mon25[1])
					->setCellValue('C26', $mon26[1])
					->setCellValue('C27', $mon27[1])
					->setCellValue('C28', $mon28[1])
					->setCellValue('C30', $mon30[1])
					->setCellValue('C31', $mon31[1])
					->setCellValue('C32', $mon32[1])
					->setCellValue('C33', $mon33[1])
					->setCellValue('C34', $mon34[1])
					->setCellValue('C35', $mon35[1])
					->setCellValue('C36', $mon36[1])
					->setCellValue('C38', $mon38[1])
					->setCellValue('C39', $mon39[1])
					->setCellValue('C40', $mon40[1])
					->setCellValue('C41', $mon41[1])
					->setCellValue('C42', $mon42[1])
					->setCellValue('C43', $mon43[1])
					->setCellValue('C44', $mon44[1])
					->setCellValue('C46', $mon46[1])
					->setCellValue('C47', $mon47[1])
					->setCellValue('C48', $mon48[1])
					->setCellValue('C49', $mon49[1])
					->setCellValue('C50', $mon50[1])
					->setCellValue('C51', $mon51[1])
					->setCellValue('C52', $mon52[1])
					->setCellValue('C54', $mon54[1])
					->setCellValue('C55', $mon55[1])
					->setCellValue('C56', $mon56[1])
					->setCellValue('C57', $mon57[1])
					->setCellValue('C58', $mon58[1])
					->setCellValue('C59', $mon59[1])
					->setCellValue('C60', $mon60[1])
					->setCellValue('C62', $mon62[1])
					->setCellValue('C63', $mon63[1])
					->setCellValue('C64', $mon64[1])
					->setCellValue('C65', $mon65[1])
					->setCellValue('C66', $mon66[1])
					->setCellValue('C67', $mon67[1])
					->setCellValue('C68', $mon68[1])


					->setCellValue('D6', $mon6[2])
					->setCellValue('D7', $mon7[2])
					->setCellValue('D8', $mon8[2])
					->setCellValue('D9', $mon9[2])
					->setCellValue('D10', $mon10[2])
					->setCellValue('D11', $mon11[2])
					->setCellValue('D12', $mon12[2])
					->setCellValue('D14', $mon14[2])
					->setCellValue('D15', $mon15[2])
					->setCellValue('D16', $mon16[2])
					->setCellValue('D17', $mon17[2])
					->setCellValue('D18', $mon18[2])
					->setCellValue('D19', $mon19[2])
					->setCellValue('D20', $mon20[2])
					->setCellValue('D22', $mon22[2])
					->setCellValue('D23', $mon23[2])
					->setCellValue('D24', $mon24[2])
					->setCellValue('D25', $mon25[2])
					->setCellValue('D26', $mon26[2])
					->setCellValue('D27', $mon27[2])
					->setCellValue('D28', $mon28[2])
					->setCellValue('D30', $mon30[2])
					->setCellValue('D31', $mon31[2])
					->setCellValue('D32', $mon32[2])
					->setCellValue('D33', $mon33[2])
					->setCellValue('D34', $mon34[2])
					->setCellValue('D35', $mon35[2])
					->setCellValue('D36', $mon36[2])
					->setCellValue('D38', $mon38[2])
					->setCellValue('D39', $mon39[2])
					->setCellValue('D40', $mon40[2])
					->setCellValue('D41', $mon41[2])
					->setCellValue('D42', $mon42[2])
					->setCellValue('D43', $mon43[2])
					->setCellValue('D44', $mon44[2])
					->setCellValue('D46', $mon46[2])
					->setCellValue('D47', $mon47[2])
					->setCellValue('D48', $mon48[2])
					->setCellValue('D49', $mon49[2])
					->setCellValue('D50', $mon50[2])
					->setCellValue('D51', $mon51[2])
					->setCellValue('D52', $mon52[2])
					->setCellValue('D54', $mon54[2])
					->setCellValue('D55', $mon55[2])
					->setCellValue('D56', $mon56[2])
					->setCellValue('D57', $mon57[2])
					->setCellValue('D58', $mon58[2])
					->setCellValue('D59', $mon59[2])
					->setCellValue('D60', $mon60[2])
					->setCellValue('D62', $mon62[2])
					->setCellValue('D63', $mon63[2])
					->setCellValue('D64', $mon64[2])
					->setCellValue('D65', $mon65[2])
					->setCellValue('D66', $mon66[2])
					->setCellValue('D67', $mon67[2])
					->setCellValue('D68', $mon68[2])


					->setCellValue('E6', $mon6[3])
					->setCellValue('E7', $mon7[3])
					->setCellValue('E8', $mon8[3])
					->setCellValue('E9', $mon9[3])
					->setCellValue('E10', $mon10[3])
					->setCellValue('E11', $mon11[3])
					->setCellValue('E12', $mon12[3])
					->setCellValue('E14', $mon14[3])
					->setCellValue('E15', $mon15[3])
					->setCellValue('E16', $mon16[3])
					->setCellValue('E17', $mon17[3])
					->setCellValue('E18', $mon18[3])
					->setCellValue('E19', $mon19[3])
					->setCellValue('E20', $mon20[3])
					->setCellValue('E22', $mon22[3])
					->setCellValue('E23', $mon23[3])
					->setCellValue('E24', $mon24[3])
					->setCellValue('E25', $mon25[3])
					->setCellValue('E26', $mon26[3])
					->setCellValue('E27', $mon27[3])
					->setCellValue('E28', $mon28[3])
					->setCellValue('E30', $mon30[3])
					->setCellValue('E31', $mon31[3])
					->setCellValue('E32', $mon32[3])
					->setCellValue('E33', $mon33[3])
					->setCellValue('E34', $mon34[3])
					->setCellValue('E35', $mon35[3])
					->setCellValue('E36', $mon36[3])
					->setCellValue('E38', $mon38[3])
					->setCellValue('E39', $mon39[3])
					->setCellValue('E40', $mon40[3])
					->setCellValue('E41', $mon41[3])
					->setCellValue('E42', $mon42[3])
					->setCellValue('E43', $mon43[3])
					->setCellValue('E44', $mon44[3])
					->setCellValue('E46', $mon46[3])
					->setCellValue('E47', $mon47[3])
					->setCellValue('E48', $mon48[3])
					->setCellValue('E49', $mon49[3])
					->setCellValue('E50', $mon50[3])
					->setCellValue('E51', $mon51[3])
					->setCellValue('E52', $mon52[3])
					->setCellValue('E54', $mon54[3])
					->setCellValue('E55', $mon55[3])
					->setCellValue('E56', $mon56[3])
					->setCellValue('E57', $mon57[3])
					->setCellValue('E58', $mon58[3])
					->setCellValue('E59', $mon59[3])
					->setCellValue('E60', $mon60[3])
					->setCellValue('E62', $mon62[3])
					->setCellValue('E63', $mon63[3])
					->setCellValue('E64', $mon64[3])
					->setCellValue('E65', $mon65[3])
					->setCellValue('E66', $mon66[3])
					->setCellValue('E67', $mon67[3])
					->setCellValue('E68', $mon68[3])



					->setCellValue('F6', $mon6[4])
					->setCellValue('F7', $mon7[4])
					->setCellValue('F8', $mon8[4])
					->setCellValue('F9', $mon9[4])
					->setCellValue('F10', $mon10[4])
					->setCellValue('F11', $mon11[4])
					->setCellValue('F12', $mon12[4])
					->setCellValue('F14', $mon14[4])
					->setCellValue('F15', $mon15[4])
					->setCellValue('F16', $mon16[4])
					->setCellValue('F17', $mon17[4])
					->setCellValue('F18', $mon18[4])
					->setCellValue('F19', $mon19[4])
					->setCellValue('F20', $mon20[4])
					->setCellValue('F22', $mon22[4])
					->setCellValue('F23', $mon23[4])
					->setCellValue('F24', $mon24[4])
					->setCellValue('F25', $mon25[4])
					->setCellValue('F26', $mon26[4])
					->setCellValue('F27', $mon27[4])
					->setCellValue('F28', $mon28[4])
					->setCellValue('F30', $mon30[4])
					->setCellValue('F31', $mon31[4])
					->setCellValue('F32', $mon32[4])
					->setCellValue('F33', $mon33[4])
					->setCellValue('F34', $mon34[4])
					->setCellValue('F35', $mon35[4])
					->setCellValue('F36', $mon36[4])
					->setCellValue('F38', $mon38[4])
					->setCellValue('F39', $mon39[4])
					->setCellValue('F40', $mon40[4])
					->setCellValue('F41', $mon41[4])
					->setCellValue('F42', $mon42[4])
					->setCellValue('F43', $mon43[4])
					->setCellValue('F44', $mon44[4])
					->setCellValue('F46', $mon46[4])
					->setCellValue('F47', $mon47[4])
					->setCellValue('F48', $mon48[4])
					->setCellValue('F49', $mon49[4])
					->setCellValue('F50', $mon50[4])
					->setCellValue('F51', $mon51[4])
					->setCellValue('F52', $mon52[4])
					->setCellValue('F54', $mon54[4])
					->setCellValue('F55', $mon55[4])
					->setCellValue('F56', $mon56[4])
					->setCellValue('F57', $mon57[4])
					->setCellValue('F58', $mon58[4])
					->setCellValue('F59', $mon59[4])
					->setCellValue('F60', $mon60[4])
					->setCellValue('F62', $mon62[4])
					->setCellValue('F63', $mon63[4])
					->setCellValue('F64', $mon64[4])
					->setCellValue('F65', $mon65[4])
					->setCellValue('F66', $mon66[4])
					->setCellValue('F67', $mon67[4])
					->setCellValue('F68', $mon68[4])



					->setCellValue('G6', $mon6[5])
					->setCellValue('G7', $mon7[5])
					->setCellValue('G8', $mon8[5])
					->setCellValue('G9', $mon9[5])
					->setCellValue('G10', $mon10[5])
					->setCellValue('G11', $mon11[5])
					->setCellValue('G12', $mon12[5])
					->setCellValue('G14', $mon14[5])
					->setCellValue('G15', $mon15[5])
					->setCellValue('G16', $mon16[5])
					->setCellValue('G17', $mon17[5])
					->setCellValue('G18', $mon18[5])
					->setCellValue('G19', $mon19[5])
					->setCellValue('G20', $mon20[5])
					->setCellValue('G22', $mon22[5])
					->setCellValue('G23', $mon23[5])
					->setCellValue('G24', $mon24[5])
					->setCellValue('G25', $mon25[5])
					->setCellValue('G26', $mon26[5])
					->setCellValue('G27', $mon27[5])
					->setCellValue('G28', $mon28[5])
					->setCellValue('G30', $mon30[5])
					->setCellValue('G31', $mon31[5])
					->setCellValue('G32', $mon32[5])
					->setCellValue('G33', $mon33[5])
					->setCellValue('G34', $mon34[5])
					->setCellValue('G35', $mon35[5])
					->setCellValue('G36', $mon36[5])
					->setCellValue('G38', $mon38[5])
					->setCellValue('G39', $mon39[5])
					->setCellValue('G40', $mon40[5])
					->setCellValue('G41', $mon41[5])
					->setCellValue('G42', $mon42[5])
					->setCellValue('G43', $mon43[5])
					->setCellValue('G44', $mon44[5])
					->setCellValue('G46', $mon46[5])
					->setCellValue('G47', $mon47[5])
					->setCellValue('G48', $mon48[5])
					->setCellValue('G49', $mon49[5])
					->setCellValue('G50', $mon50[5])
					->setCellValue('G51', $mon51[5])
					->setCellValue('G52', $mon52[5])
					->setCellValue('G54', $mon54[5])
					->setCellValue('G55', $mon55[5])
					->setCellValue('G56', $mon56[5])
					->setCellValue('G57', $mon57[5])
					->setCellValue('G58', $mon58[5])
					->setCellValue('G59', $mon59[5])
					->setCellValue('G60', $mon60[5])
					->setCellValue('G62', $mon62[5])
					->setCellValue('G63', $mon63[5])
					->setCellValue('G64', $mon64[5])
					->setCellValue('G65', $mon65[5])
					->setCellValue('G66', $mon66[5])
					->setCellValue('G67', $mon67[5])
					->setCellValue('G68', $mon68[5])



					->setCellValue('H6', $mon6[6])
					->setCellValue('H7', $mon7[6])
					->setCellValue('H8', $mon8[6])
					->setCellValue('H9', $mon9[6])
					->setCellValue('H10', $mon10[6])
					->setCellValue('H11', $mon11[6])
					->setCellValue('H12', $mon12[6])
					->setCellValue('H14', $mon14[6])
					->setCellValue('H15', $mon15[6])
					->setCellValue('H16', $mon16[6])
					->setCellValue('H17', $mon17[6])
					->setCellValue('H18', $mon18[6])
					->setCellValue('H19', $mon19[6])
					->setCellValue('H20', $mon20[6])
					->setCellValue('H22', $mon22[6])
					->setCellValue('H23', $mon23[6])
					->setCellValue('H24', $mon24[6])
					->setCellValue('H25', $mon25[6])
					->setCellValue('H26', $mon26[6])
					->setCellValue('H27', $mon27[6])
					->setCellValue('H28', $mon28[6])
					->setCellValue('H30', $mon30[6])
					->setCellValue('H31', $mon31[6])
					->setCellValue('H32', $mon32[6])
					->setCellValue('H33', $mon33[6])
					->setCellValue('H34', $mon34[6])
					->setCellValue('H35', $mon35[6])
					->setCellValue('H36', $mon36[6])
					->setCellValue('H38', $mon38[6])
					->setCellValue('H39', $mon39[6])
					->setCellValue('H40', $mon40[6])
					->setCellValue('H41', $mon41[6])
					->setCellValue('H42', $mon42[6])
					->setCellValue('H43', $mon43[6])
					->setCellValue('H44', $mon44[6])
					->setCellValue('H46', $mon46[6])
					->setCellValue('H47', $mon47[6])
					->setCellValue('H48', $mon48[6])
					->setCellValue('H49', $mon49[6])
					->setCellValue('H50', $mon50[6])
					->setCellValue('H51', $mon51[6])
					->setCellValue('H52', $mon52[6])
					->setCellValue('H54', $mon54[6])
					->setCellValue('H55', $mon55[6])
					->setCellValue('H56', $mon56[6])
					->setCellValue('H57', $mon57[6])
					->setCellValue('H58', $mon58[6])
					->setCellValue('H59', $mon59[6])
					->setCellValue('H60', $mon60[6])
					->setCellValue('H62', $mon62[6])
					->setCellValue('H63', $mon63[6])
					->setCellValue('H64', $mon64[6])
					->setCellValue('H65', $mon65[6])
					->setCellValue('H66', $mon66[6])
					->setCellValue('H67', $mon67[6])
					->setCellValue('H68', $mon68[6])


					->setCellValue('I6', $mon6[7])
					->setCellValue('I7', $mon7[7])
					->setCellValue('I8', $mon8[7])
					->setCellValue('I9', $mon9[7])
					->setCellValue('I10', $mon10[7])
					->setCellValue('I11', $mon11[7])
					->setCellValue('I12', $mon12[7])
					->setCellValue('I14', $mon14[7])
					->setCellValue('I15', $mon15[7])
					->setCellValue('I16', $mon16[7])
					->setCellValue('I17', $mon17[7])
					->setCellValue('I18', $mon18[7])
					->setCellValue('I19', $mon19[7])
					->setCellValue('I20', $mon20[7])
					->setCellValue('I22', $mon22[7])
					->setCellValue('I23', $mon23[7])
					->setCellValue('I24', $mon24[7])
					->setCellValue('I25', $mon25[7])
					->setCellValue('I26', $mon26[7])
					->setCellValue('I27', $mon27[7])
					->setCellValue('I28', $mon28[7])
					->setCellValue('I30', $mon30[7])
					->setCellValue('I31', $mon31[7])
					->setCellValue('I32', $mon32[7])
					->setCellValue('I33', $mon33[7])
					->setCellValue('I34', $mon34[7])
					->setCellValue('I35', $mon35[7])
					->setCellValue('I36', $mon36[7])
					->setCellValue('I38', $mon38[7])
					->setCellValue('I39', $mon39[7])
					->setCellValue('I40', $mon40[7])
					->setCellValue('I41', $mon41[7])
					->setCellValue('I42', $mon42[7])
					->setCellValue('I43', $mon43[7])
					->setCellValue('I44', $mon44[7])
					->setCellValue('I46', $mon46[7])
					->setCellValue('I47', $mon47[7])
					->setCellValue('I48', $mon48[7])
					->setCellValue('I49', $mon49[7])
					->setCellValue('I50', $mon50[7])
					->setCellValue('I51', $mon51[7])
					->setCellValue('I52', $mon52[7])
					->setCellValue('I54', $mon54[7])
					->setCellValue('I55', $mon55[7])
					->setCellValue('I56', $mon56[7])
					->setCellValue('I57', $mon57[7])
					->setCellValue('I58', $mon58[7])
					->setCellValue('I59', $mon59[7])
					->setCellValue('I60', $mon60[7])
					->setCellValue('I62', $mon62[7])
					->setCellValue('I63', $mon63[7])
					->setCellValue('I64', $mon64[7])
					->setCellValue('I65', $mon65[7])
					->setCellValue('I66', $mon66[7])
					->setCellValue('I67', $mon67[7])
					->setCellValue('I68', $mon68[7])





					->setCellValue('J6', $mon6[8])
					->setCellValue('J7', $mon7[8])
					->setCellValue('J8', $mon8[8])
					->setCellValue('J9', $mon9[8])
					->setCellValue('J10', $mon10[8])
					->setCellValue('J11', $mon11[8])
					->setCellValue('J12', $mon12[8])
					->setCellValue('J14', $mon14[8])
					->setCellValue('J15', $mon15[8])
					->setCellValue('J16', $mon16[8])
					->setCellValue('J17', $mon17[8])
					->setCellValue('J18', $mon18[8])
					->setCellValue('J19', $mon19[8])
					->setCellValue('J20', $mon20[8])
					->setCellValue('J22', $mon22[8])
					->setCellValue('J23', $mon23[8])
					->setCellValue('J24', $mon24[8])
					->setCellValue('J25', $mon25[8])
					->setCellValue('J26', $mon26[8])
					->setCellValue('J27', $mon27[8])
					->setCellValue('J28', $mon28[8])
					->setCellValue('J30', $mon30[8])
					->setCellValue('J31', $mon31[8])
					->setCellValue('J32', $mon32[8])
					->setCellValue('J33', $mon33[8])
					->setCellValue('J34', $mon34[8])
					->setCellValue('J35', $mon35[8])
					->setCellValue('J36', $mon36[8])
					->setCellValue('J38', $mon38[8])
					->setCellValue('J39', $mon39[8])
					->setCellValue('J40', $mon40[8])
					->setCellValue('J41', $mon41[8])
					->setCellValue('J42', $mon42[8])
					->setCellValue('J43', $mon43[8])
					->setCellValue('J44', $mon44[8])
					->setCellValue('J46', $mon46[8])
					->setCellValue('J47', $mon47[8])
					->setCellValue('J48', $mon48[8])
					->setCellValue('J49', $mon49[8])
					->setCellValue('J50', $mon50[8])
					->setCellValue('J51', $mon51[8])
					->setCellValue('J52', $mon52[8])
					->setCellValue('J54', $mon54[8])
					->setCellValue('J55', $mon55[8])
					->setCellValue('J56', $mon56[8])
					->setCellValue('J57', $mon57[8])
					->setCellValue('J58', $mon58[8])
					->setCellValue('J59', $mon59[8])
					->setCellValue('J60', $mon60[8])
					->setCellValue('J62', $mon62[8])
					->setCellValue('J63', $mon63[8])
					->setCellValue('J64', $mon64[8])
					->setCellValue('J65', $mon65[8])
					->setCellValue('J66', $mon66[8])
					->setCellValue('J67', $mon67[8])
					->setCellValue('J68', $mon68[8])



					->setCellValue('K6', $mon6[9])
					->setCellValue('K7', $mon7[9])
					->setCellValue('K8', $mon8[9])
					->setCellValue('K9', $mon9[9])
					->setCellValue('K10', $mon10[9])
					->setCellValue('K11', $mon11[9])
					->setCellValue('K12', $mon12[9])
					->setCellValue('K14', $mon14[9])
					->setCellValue('K15', $mon15[9])
					->setCellValue('K16', $mon16[9])
					->setCellValue('K17', $mon17[9])
					->setCellValue('K18', $mon18[9])
					->setCellValue('K19', $mon19[9])
					->setCellValue('K20', $mon20[9])
					->setCellValue('K22', $mon22[9])
					->setCellValue('K23', $mon23[9])
					->setCellValue('K24', $mon24[9])
					->setCellValue('K25', $mon25[9])
					->setCellValue('K26', $mon26[9])
					->setCellValue('K27', $mon27[9])
					->setCellValue('K28', $mon28[9])
					->setCellValue('K30', $mon30[9])
					->setCellValue('K31', $mon31[9])
					->setCellValue('K32', $mon32[9])
					->setCellValue('K33', $mon33[9])
					->setCellValue('K34', $mon34[9])
					->setCellValue('K35', $mon35[9])
					->setCellValue('K36', $mon36[9])
					->setCellValue('K38', $mon38[9])
					->setCellValue('K39', $mon39[9])
					->setCellValue('K40', $mon40[9])
					->setCellValue('K41', $mon41[9])
					->setCellValue('K42', $mon42[9])
					->setCellValue('K43', $mon43[9])
					->setCellValue('K44', $mon44[9])
					->setCellValue('K46', $mon46[9])
					->setCellValue('K47', $mon47[9])
					->setCellValue('K48', $mon48[9])
					->setCellValue('K49', $mon49[9])
					->setCellValue('K50', $mon50[9])
					->setCellValue('K51', $mon51[9])
					->setCellValue('K52', $mon52[9])
					->setCellValue('K54', $mon54[9])
					->setCellValue('K55', $mon55[9])
					->setCellValue('K56', $mon56[9])
					->setCellValue('K57', $mon57[9])
					->setCellValue('K58', $mon58[9])
					->setCellValue('K59', $mon59[9])
					->setCellValue('K60', $mon60[9])
					->setCellValue('K62', $mon62[9])
					->setCellValue('K63', $mon63[9])
					->setCellValue('K64', $mon64[9])
					->setCellValue('K65', $mon65[9])
					->setCellValue('K66', $mon66[9])
					->setCellValue('K67', $mon67[9])
					->setCellValue('K68', $mon68[9])



					->setCellValue('L6', $mon6[10])
					->setCellValue('L7', $mon7[10])
					->setCellValue('L8', $mon8[10])
					->setCellValue('L9', $mon9[10])
					->setCellValue('L10', $mon10[10])
					->setCellValue('L11', $mon11[10])
					->setCellValue('L12', $mon12[10])
					->setCellValue('L14', $mon14[10])
					->setCellValue('L15', $mon15[10])
					->setCellValue('L16', $mon16[10])
					->setCellValue('L17', $mon17[10])
					->setCellValue('L18', $mon18[10])
					->setCellValue('L19', $mon19[10])
					->setCellValue('L20', $mon20[10])
					->setCellValue('L22', $mon22[10])
					->setCellValue('L23', $mon23[10])
					->setCellValue('L24', $mon24[10])
					->setCellValue('L25', $mon25[10])
					->setCellValue('L26', $mon26[10])
					->setCellValue('L27', $mon27[10])
					->setCellValue('L28', $mon28[10])
					->setCellValue('L30', $mon30[10])
					->setCellValue('L31', $mon31[10])
					->setCellValue('L32', $mon32[10])
					->setCellValue('L33', $mon33[10])
					->setCellValue('L34', $mon34[10])
					->setCellValue('L35', $mon35[10])
					->setCellValue('L36', $mon36[10])
					->setCellValue('L38', $mon38[10])
					->setCellValue('L39', $mon39[10])
					->setCellValue('L40', $mon40[10])
					->setCellValue('L41', $mon41[10])
					->setCellValue('L42', $mon42[10])
					->setCellValue('L43', $mon43[10])
					->setCellValue('L44', $mon44[10])
					->setCellValue('L46', $mon46[10])
					->setCellValue('L47', $mon47[10])
					->setCellValue('L48', $mon48[10])
					->setCellValue('L49', $mon49[10])
					->setCellValue('L50', $mon50[10])
					->setCellValue('L51', $mon51[10])
					->setCellValue('L52', $mon52[10])
					->setCellValue('L54', $mon54[10])
					->setCellValue('L55', $mon55[10])
					->setCellValue('L56', $mon56[10])
					->setCellValue('L57', $mon57[10])
					->setCellValue('L58', $mon58[10])
					->setCellValue('L59', $mon59[10])
					->setCellValue('L60', $mon60[10])
					->setCellValue('L62', $mon62[10])
					->setCellValue('L63', $mon63[10])
					->setCellValue('L64', $mon64[10])
					->setCellValue('L65', $mon65[10])
					->setCellValue('L66', $mon66[10])
					->setCellValue('L67', $mon67[10])
					->setCellValue('L68', $mon68[10])



					->setCellValue('M6', $mon6[11])
					->setCellValue('M7', $mon7[11])
					->setCellValue('M8', $mon8[11])
					->setCellValue('M9', $mon9[11])
					->setCellValue('M10', $mon10[11])
					->setCellValue('M11', $mon11[11])
					->setCellValue('M12', $mon12[11])
					->setCellValue('M14', $mon14[11])
					->setCellValue('M15', $mon15[11])
					->setCellValue('M16', $mon16[11])
					->setCellValue('M17', $mon17[11])
					->setCellValue('M18', $mon18[11])
					->setCellValue('M19', $mon19[11])
					->setCellValue('M20', $mon20[11])
					->setCellValue('M22', $mon22[11])
					->setCellValue('M23', $mon23[11])
					->setCellValue('M24', $mon24[11])
					->setCellValue('M25', $mon25[11])
					->setCellValue('M26', $mon26[11])
					->setCellValue('M27', $mon27[11])
					->setCellValue('M28', $mon28[11])
					->setCellValue('M30', $mon30[11])
					->setCellValue('M31', $mon31[11])
					->setCellValue('M32', $mon32[11])
					->setCellValue('M33', $mon33[11])
					->setCellValue('M34', $mon34[11])
					->setCellValue('M35', $mon35[11])
					->setCellValue('M36', $mon36[11])
					->setCellValue('M38', $mon38[11])
					->setCellValue('M39', $mon39[11])
					->setCellValue('M40', $mon40[11])
					->setCellValue('M41', $mon41[11])
					->setCellValue('M42', $mon42[11])
					->setCellValue('M43', $mon43[11])
					->setCellValue('M44', $mon44[11])
					->setCellValue('M46', $mon46[11])
					->setCellValue('M47', $mon47[11])
					->setCellValue('M48', $mon48[11])
					->setCellValue('M49', $mon49[11])
					->setCellValue('M50', $mon50[11])
					->setCellValue('M51', $mon51[11])
					->setCellValue('M52', $mon52[11])
					->setCellValue('M54', $mon54[11])
					->setCellValue('M55', $mon55[11])
					->setCellValue('M56', $mon56[11])
					->setCellValue('M57', $mon57[11])
					->setCellValue('M58', $mon58[11])
					->setCellValue('M59', $mon59[11])
					->setCellValue('M60', $mon60[11])
					->setCellValue('M62', $mon62[11])
					->setCellValue('M63', $mon63[11])
					->setCellValue('M64', $mon64[11])
					->setCellValue('M65', $mon65[11])
					->setCellValue('M66', $mon66[11])
					->setCellValue('M67', $mon67[11])
					->setCellValue('M68', $mon68[11])


					;




					// формула в последнем столбце


					$objPHPExcel->getActiveSheet()->setCellValue('N6','= SUM(C6:M6)');
					$objPHPExcel->getActiveSheet()->setCellValue('N7','= SUM(C7:M7)');
					$objPHPExcel->getActiveSheet()->setCellValue('N8','= SUM(C8:M8)');
					$objPHPExcel->getActiveSheet()->setCellValue('N9','= SUM(C9:M9)');
					$objPHPExcel->getActiveSheet()->setCellValue('N10','= SUM(C10:M10)');
					$objPHPExcel->getActiveSheet()->setCellValue('N11','= SUM(N7:N8)/N6');
					$objPHPExcel->getActiveSheet()->getStyle('N11')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N12','= SUM(N7:N9)/N6');
					$objPHPExcel->getActiveSheet()->getStyle('N12')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление					
					//$objPHPExcel->getActiveSheet()->setCellValue('N13','= SUM(C13:M13)');
					$objPHPExcel->getActiveSheet()->setCellValue('N14','= SUM(C14:M14)');
					$objPHPExcel->getActiveSheet()->setCellValue('N15','= SUM(C15:M15)');
					$objPHPExcel->getActiveSheet()->setCellValue('N16','= SUM(C16:M16)');
					$objPHPExcel->getActiveSheet()->setCellValue('N17','= SUM(C17:M17)');
					$objPHPExcel->getActiveSheet()->setCellValue('N18','= SUM(C18:M18)');
					$objPHPExcel->getActiveSheet()->setCellValue('N19','= SUM(N15:N16)/N14');
					$objPHPExcel->getActiveSheet()->getStyle('N19')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление	
					$objPHPExcel->getActiveSheet()->setCellValue('N20','= SUM(N15:N17)/N14');
					$objPHPExcel->getActiveSheet()->getStyle('N20')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление	
					//$objPHPExcel->getActiveSheet()->setCellValue('N21','= SUM(C21:M21)');
					$objPHPExcel->getActiveSheet()->setCellValue('N22','= SUM(C22:M22)');
					$objPHPExcel->getActiveSheet()->setCellValue('N23','= SUM(C23:M23)');
					$objPHPExcel->getActiveSheet()->setCellValue('N24','= SUM(C24:M24)');
					$objPHPExcel->getActiveSheet()->setCellValue('N25','= SUM(C25:M25)');
					$objPHPExcel->getActiveSheet()->setCellValue('N26','= SUM(C26:M26)');
					$objPHPExcel->getActiveSheet()->setCellValue('N27','= SUM(N23:N24)/N22');
					$objPHPExcel->getActiveSheet()->getStyle('N27')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N28','= SUM(N23:N25)/N22');
					$objPHPExcel->getActiveSheet()->getStyle('N28')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					//$objPHPExcel->getActiveSheet()->setCellValue('N29','= SUM(C29:M29)');
					$objPHPExcel->getActiveSheet()->setCellValue('N30','= SUM(C30:M30)');
					$objPHPExcel->getActiveSheet()->setCellValue('N31','= SUM(C31:M31)');
					$objPHPExcel->getActiveSheet()->setCellValue('N32','= SUM(C32:M32)');
					$objPHPExcel->getActiveSheet()->setCellValue('N33','= SUM(C33:M33)');
					$objPHPExcel->getActiveSheet()->setCellValue('N34','= SUM(C34:M34)');
					$objPHPExcel->getActiveSheet()->setCellValue('N35','= SUM(N31:N32)/N30');
					$objPHPExcel->getActiveSheet()->getStyle('N35')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N36','= SUM(N31:N33)/N30');
					$objPHPExcel->getActiveSheet()->getStyle('N36')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					//$objPHPExcel->getActiveSheet()->setCellValue('N37','= SUM(C37:M37)');
					$objPHPExcel->getActiveSheet()->setCellValue('N38','= SUM(C38:M38)');
					$objPHPExcel->getActiveSheet()->setCellValue('N39','= SUM(C39:M39)');
					$objPHPExcel->getActiveSheet()->setCellValue('N40','= SUM(C40:M40)');
					$objPHPExcel->getActiveSheet()->setCellValue('N41','= SUM(C41:M41)');
					$objPHPExcel->getActiveSheet()->setCellValue('N42','= SUM(C42:M42)');
					$objPHPExcel->getActiveSheet()->setCellValue('N43','= SUM(N39:N40)/N38');
					$objPHPExcel->getActiveSheet()->getStyle('N43')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N44','= SUM(N39:N41)/N38');
					$objPHPExcel->getActiveSheet()->getStyle('N44')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					//$objPHPExcel->getActiveSheet()->setCellValue('N45','= SUM(C45:M45)');
					$objPHPExcel->getActiveSheet()->setCellValue('N46','= SUM(C46:M46)');
					$objPHPExcel->getActiveSheet()->setCellValue('N47','= SUM(C47:M47)');
					$objPHPExcel->getActiveSheet()->setCellValue('N48','= SUM(C48:M48)');
					$objPHPExcel->getActiveSheet()->setCellValue('N49','= SUM(C49:M49)');
					$objPHPExcel->getActiveSheet()->setCellValue('N50','= SUM(C50:M50)');
					$objPHPExcel->getActiveSheet()->setCellValue('N51','= SUM(N47:N49)/N46');
					$objPHPExcel->getActiveSheet()->getStyle('N51')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N52','= SUM(N47:N48)/N46');
					$objPHPExcel->getActiveSheet()->getStyle('N52')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					//$objPHPExcel->getActiveSheet()->setCellValue('N53','= SUM(C53:M53)');
					$objPHPExcel->getActiveSheet()->setCellValue('N54','= SUM(C54:M54)');
					$objPHPExcel->getActiveSheet()->setCellValue('N55','= SUM(C55:M55)');
					$objPHPExcel->getActiveSheet()->setCellValue('N56','= SUM(C56:M56)');
					$objPHPExcel->getActiveSheet()->setCellValue('N57','= SUM(C57:M57)');
					$objPHPExcel->getActiveSheet()->setCellValue('N58','= SUM(C58:M58)');
					$objPHPExcel->getActiveSheet()->setCellValue('N59','= SUM(N55:N57)/N54');
					$objPHPExcel->getActiveSheet()->getStyle('N59')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N60','= SUM(N55:N56)/N54');
					$objPHPExcel->getActiveSheet()->getStyle('N60')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N61','= SUM(C61:M61)');
					$objPHPExcel->getActiveSheet()->setCellValue('N62','= SUM(C62:M62)');
					$objPHPExcel->getActiveSheet()->setCellValue('N63','= SUM(C63:M63)');
					$objPHPExcel->getActiveSheet()->setCellValue('N64','= SUM(C64:M64)');
					$objPHPExcel->getActiveSheet()->setCellValue('N65','= SUM(C65:M65)');
					$objPHPExcel->getActiveSheet()->setCellValue('N66','= SUM(C66:M66)');
					$objPHPExcel->getActiveSheet()->setCellValue('N67','= SUM(N63:N65)/N62');
					$objPHPExcel->getActiveSheet()->getStyle('N67')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление
					$objPHPExcel->getActiveSheet()->setCellValue('N68','= SUM(N63:N64)/N62');
					$objPHPExcel->getActiveSheet()->getStyle('N68')->getNumberFormat()->setFormatCode('#,##0.00'); // формат числа округление










					// форматирование

					// заливка ячеек зеленным цветом 
					$objPHPExcel->getActiveSheet()->getStyle('B11:N12')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);

					$objPHPExcel->getActiveSheet()->getStyle('B19:N20')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);

					$objPHPExcel->getActiveSheet()->getStyle('B27:N28')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);

					$objPHPExcel->getActiveSheet()->getStyle('B35:N36')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);
						
						
					$objPHPExcel->getActiveSheet()->getStyle('B43:N44')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);
						
							
					$objPHPExcel->getActiveSheet()->getStyle('B51:N52')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);
						
							
					$objPHPExcel->getActiveSheet()->getStyle('B59:N60')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);
									
					$objPHPExcel->getActiveSheet()->getStyle('B67:N68')
					->applyFromArray(
						array('fill' 	=> array(
													'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													'color'		=> array('argb' => '##00FF00')
												)
							 )
						);
								
					// $objPHPExcel->getActiveSheet()->getStyle('B75:N76')
					// ->applyFromArray(
						// array('fill' 	=> array(
													// 'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
													// 'color'		=> array('argb' => '##00FF00')
												// ),
							  // 'borders' => array(
													// 'allborders'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
													//'right'		=> array('style' => PHPExcel_Style_Border::BORDER_MEDIUM)
												// )
							 // )
						// );
						
					// сетка
						
					$objPHPExcel->getActiveSheet()->getStyle('A5:N68')
					->applyFromArray(
						array(  'borders' => array(
													'allborders'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
													//'right'		=> array('style' => PHPExcel_Style_Border::BORDER_MEDIUM)
												)
							 )
						);
					// поворот
						
					$objPHPExcel->getActiveSheet()->getStyle('A5:A12')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					$objPHPExcel->getActiveSheet()->getStyle('A13:A20')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке		
					$objPHPExcel->getActiveSheet()->getStyle('A21:A28')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					$objPHPExcel->getActiveSheet()->getStyle('A29:A36')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					$objPHPExcel->getActiveSheet()->getStyle('A37:A44')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке		
					$objPHPExcel->getActiveSheet()->getStyle('A45:A52')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					$objPHPExcel->getActiveSheet()->getStyle('A53:A60')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					$objPHPExcel->getActiveSheet()->getStyle('A61:A68')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке
					//$objPHPExcel->getActiveSheet()->getStyle('A69:A76')->getAlignment()->setTextRotation(90);  // поворот текста в ячейке		
								
								
					// форматирование заголовка
					$objPHPExcel->getActiveSheet()->mergeCells('A1:N2'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A3:N3'); // объединенте

					$objPHPExcel->getActiveSheet()->mergeCells('A5:A12'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A13:A20'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A21:A28'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A29:A36'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A37:A44'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A45:A52'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A53:A60'); // объединенте
					$objPHPExcel->getActiveSheet()->mergeCells('A61:A68'); // объединенте
					//$objPHPExcel->getActiveSheet()->mergeCells('A69:A76'); // объединенте


					$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true); // перенос строк

					$objPHPExcel->getActiveSheet()->getStyle('A1:N80')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // центрирование по горинтоали
					$objPHPExcel->getActiveSheet()->getStyle('A1:D4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);// центрирование по веритикали
					$objPHPExcel->getActiveSheet()->getStyle('A1:A76')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);// центрирование по веритикали



					$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(22); // ширина столбца
					$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // ширина столбца


					$objPHPExcel->addSheet($myWorkSheet, 0);
					$objPHPExcel->getActiveSheet()->setTitle($im_list);

									}

								}
					 
	}










// Установите активный индекс листа к первому листу, так Excel открывает это как первого листа
$objPHPExcel->setActiveSheetIndex(0);
// $objPHPExcel->getActiveSheet()->setSheetState(PHPExcel_Worksheet::SHEETSTATE_HIDDEN); // скрывает лист
$objPHPExcel->setActiveSheetIndex(1);

echo "<br>========================================================================";

/* // Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="01simple.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 013:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0 */

/* $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save("05featuredemo.xlsx"); */
$file_name=$raion."_mon.xls";
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save($file_name);
// формирование ссылки для скачивания
$mes="Скачать итоговый файл";
 $mes = mb_convert_encoding ($mes ,"Windows-1251" , "UTF-8" );				
echo "<br><a href=http://www.trmk.idhost.kz/1/monitor/excel/Excel1/".$file_name.">".$mes." - ".$file_name." </a>";
//$objWriter->save('php://output'); //для скачивания

exit;
