<?php

namespace Skogstadmedia\Bundle\CbbBundle\Twig;

class BossImageExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('bossImage', array($this, 'getImageUrl')),
        );
    }

    public function getImageUrl($name)
    {
        $url = 'http://wow.zamimg.com/images/wow/journal/ui-ej-boss-';
        $name = preg_replace("/[^ \w]+/", "", $name);
        $name = str_replace(' ', '-', $name);
        $name = strtolower($name);
        return $url . $name . '.png';
    }
    
    public function getName()
    {
        return 'bossImage';
    }
}