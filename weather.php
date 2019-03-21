<?php
//collects the data from the API provided
$data = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?q=Angoul%C3%AAme&mode=json&appid=4c751f95a60360ae52bee41672463b92');

$decodedData = json_decode($data);

print json_encode($weather);
?>