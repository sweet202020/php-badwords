<?php
$contentP=$_GET["paragraph"];
echo 'il paragrafo è ' . $contentP . '<br>';
echo 'il paragrafo è lungo ' . strlen($contentP) . ' caratteri' . '<br>';

$badWords=$_GET["badwords"];

echo str_replace($badWords, "***" , $contentP);

?>