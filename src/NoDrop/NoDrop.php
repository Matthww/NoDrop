<?php

namespace NoDrop;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;

class NoDrop extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onPlayerDeath(PlayerDeathEvent $event){
        if($event->getEntity() instanceof Player){
            $event->setDrops([]);
        }
    }
}