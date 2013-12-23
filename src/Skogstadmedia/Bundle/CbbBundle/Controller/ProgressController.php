<?php

namespace Skogstadmedia\Bundle\CbbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgressController extends Controller
{
    public function renderProgressAction()
    {
        $progress = $this->getProgress('Zimzalladin');
        
        return $this->render('CbbBundle:Parts:raidprogress.html.twig', array('progress' => $progress));
    }
    
    public function getProgress($character)
    {
        $bnet = $this->get('wow.bnet');
        $instances = array('Siege of Orgrimmar');
        $realm = $this->container->getParameter('guild.realm');
        
        $stash = $this->get('stash.default_cache');
        
        $item = $stash->getItem('Guild', 'Progresss', md5(serialize($instances)), $character);
        
        $raids = $item->get();
        
        if($item->isMiss()) {
            $character = $bnet->getCharacter(array(
                'realm' => $realm, 
                'name' => $character,
                'fields' => array(
                    'progression'
                )
            ));

            $progress = $character->getProgression();
            
            $raids = array();
            
            foreach($progress->toArray() as $instance) {
                if(in_array($instance->getName(), $instances)) {
                    $raids[] = array(
                        'name' => $instance->getName(),
                        'bosses' => $instance->getBosses(),
                    );
                }
            }
            $raids = array_reverse($raids);
            $item->set($raids, 3600);
        }

        return $raids;
    }
}
