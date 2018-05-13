<?php

class Placemarks
{
    const STYLE_PM = 'pm';
    const STYLE_PM2 = 'pm2';
    const STYLE_FLAG = 'flag';
    const STYLE_VK = 'vk';
    const STYLE_COMMA = 'comma';
    const STYLE_ORG = 'org';
    const STYLE_ROUND = 'round';
    const STYLE_HOME = 'home';
    const STYLE_WORK = 'work';
    const STYLE_YA_EN = 'ya_en';

    protected $latitude;
    protected $longitude;
    protected $style = self::STYLE_HOME;
    protected $color;
    protected $size;
    protected $content;

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
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function get() {
        return $this->longitude . ',' . $this->latitude . ',' . $this->style . $this->color . $this->size . $this->content;
    }
}