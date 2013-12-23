<?php

namespace Skogstadmedia\Bundle\WoWBundle\Services;

use bnetlib\Locale\Locale;
use bnetlib\WorldOfWarcraft;
use bnetlib\Connection\ZendFramework;

class BnetService 
{
    protected $locale;
    protected $cache;
    
    public function __construct($cacheService)
    {
        $this->cache = $cacheService;
    }
    
    private function connect()
    {
        static $bnet;
        
        if($bnet instanceof WorldOfWarcraft) {
            return $bnet;
        }
        
        $connection = new ZendFramework();
        $connection->setOptions(array(
            'defaults' => array(
                'region' => ZendFramework::REGION_EU,
                'locale' => array(
                    ZendFramework::REGION_EU => ZendFramework::LOCALE_GB
                )
            )
        ));

        $bnet = new WorldOfWarcraft($connection);
        $bnet->getServiceLocator()->setLocale(new Locale(ZendFramework::LOCALE_GB));
        
        return $bnet;
    }
    
    public function __call($method, $arguments)
    {
        try {
            $bnet = $this->connect();
            
            if(count($arguments)>0) {
                $data = call_user_func_array(array($bnet, $method), $arguments);
            }
            else {
                $data = $bnet->$method();
            }
        }
        catch(\Exception $e) {
            throw $e;
        }
        
        return $data;
    }
}