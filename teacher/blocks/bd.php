<?
$db = mysql_connect ("mysql40.cp.idhost.kz","u1004029_we","enokq082 dmknfo");
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_select_db("db1004029_new",$db);

// $db = mysql_connect ("localhost","tainsha","tainsha");
// mysql_query ("set character_set_client='cp1251'");
// mysql_query ("set character_set_results='cp1251'");
// mysql_query ("set collation_connection='cp1251_general_ci'");

// mysql_select_db("tainsha",$db);
?>