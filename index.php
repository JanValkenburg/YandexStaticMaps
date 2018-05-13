<?php

require_once 'YandexStaticMaps.php';
require_once 'Placemarks.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$placemark = new Placemarks();
$placemark->setLatitude(52.087956);
$placemark->setLongitude(5.131228);

$yandexStaticMaps = new YandexStaticMaps();
$yandexStaticMaps->setLatitude(52.087956);
$yandexStaticMaps->setLongitude(5.131228);
$yandexStaticMaps->setZoomLevel(11);
$yandexStaticMaps->setPlacemark($placemark);

$url = $yandexStaticMaps->get();

?>
<?=$url;?>
<img src="<?= $url ?>" alt="" width="650" height="450">
