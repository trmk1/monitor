<?php
foreach(glob("*.jpg") as $img){
   echo "<br><img src='$img'/><br>.$img";
}
?>