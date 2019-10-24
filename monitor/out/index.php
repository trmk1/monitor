<?
require_once('pclzip.lib.php');
$archive = new PclZip('archive.zip');
$archive->add('1.txt');


?>