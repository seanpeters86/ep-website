<?php
$json = file_get_contents("https://mythicpl.us");
if ($json == false) {
 throw new Exception("Failed To load infomation. Check setup options");
}

echo $json

#$result = json_decode($json, true);
# if (isset($result['realm_rank'])) {
#  if (is_array($result['realm_rank'])) {
#   foreach ($result["realm_rank"] as $value) {
#    echo "<pre>";
#    print_r($value);
#    echo "</pre>";
#   }
#  } 
#  else {
#   echo $result['realm_rank'];
#  } 
#}
#else {
# echo 'Unknown error';
#}
?>