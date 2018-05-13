<?php

/**
 * Class YandexStaticMaps
 */
class YandexStaticMaps
{
    const MAP_TYPE_MAP = 'map';
    const MAP_TYPE_SATELLITE='sat';
    const MAP_TYPE_TRAFFIC= 'trf';
    const MAP_TYPE_SKL = 'skl';
    const MAX_IMAGE_WIDTH = 650;
    const MAX_IMAGE_HEIGHT = 450;

    protected $baseUrl = 'https://static-maps.yandex.ru/1.x/?';
    protected $latitude = 52.370216;
    protected $longitude = 4.895168;
    protected $zoomLevel = 10;
    protected $mapType = self::MAP_TYPE_MAP;
    protected $lang = 'nl_NL';
    protected $width = 650;
    protected $height= 450;
    protected $placemarks = [];

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @param mixed $zoomlevel
     */
    public function setZoomLevel($zoomlevel)
    {
        $this->zoomLevel = $zoomlevel;
    }

    /**
     * @param mixed $mapType
     */
    public function setMapType($mapType)
    {
        $this->mapType = $mapType;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        if ($width > self::MAX_IMAGE_WIDTH) {
            $width = self::MAX_IMAGE_WIDTH;
        }
        $this->width = $width;
    }

    /**
     * @param string $height
     */
    public function setHeight($height)
    {
        if ($height > self::MAX_IMAGE_HEIGHT) {
            $height = self::MAX_IMAGE_HEIGHT;
        }
        $this->height = $height;
    }

    /**
     * @param Placemarks $placemark
     */
    public function setPlacemark(Placemarks $placemark) {
        $this->placemarks[] = $placemark;
    }

    public function get()
    {
        $array = [];
        $array['lang'] = $this->lang;
        $array['ll'] = $this->longitude . ',' . $this->latitude;
        $array['z'] = $this->zoomLevel;
        $array['l'] = $this->mapType;

        $pl= [];
        foreach ($this->placemarks as $placemark) {
            $pl[] = $placemark->get();
        }
        $array['pt'] = implode('~', $pl);

        return $this->baseUrl . http_build_query($array);
    }
}