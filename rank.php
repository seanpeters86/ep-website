<?php
$json = file_get_contents("https://www.wowprogress.com/guild/us/arthas/Exiled+Power/json_rank");
if ($json == false) {
 throw new Exception("Failed To load infomation. Check setup options");
}

echo $json


?>