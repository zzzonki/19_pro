<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
ECHO "<section class='info' id='main'>
<h3 class='info__h3'>
    {$headers[0]}
</h3>
<div class='info_text'> ";
for ($i=0; $i < count($info); $i++) { 
    echo "<p class='info_text__p'>";
       echo "$info[$i]";
    echo "</p>";
}
echo "</div>
</section>";



?>