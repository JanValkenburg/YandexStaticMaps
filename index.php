<?php
/**
 * Created by PhpStorm.
 * User: janvalkenburg
 * Date: 13-05-18
 * Time: 15:31
 */


require_once 'YandexStaticMaps.php';
require_once 'Placemarks.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$yandexStaticMaps = new YandexStaticMaps();
$placemark = new Placemarks();
$placemark->setLatitude(52.370216);
$placemark->setLongitude(4.895168);
$yandexStaticMaps->setPlacemark($placemark);
$url = $yandexStaticMaps->get();

?>
<?=$url;?>
<img src="<?= $url ?>" alt="" width="650" height="450">
