<?php

namespace TeamPublic;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;



class Main extends PluginBase {
    
    public function onEnable() {
        $this->getLogger()->info(Color::GREEN."Microbattles Has been enable!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Color::RED."MicroBattles Has been disable :(");
    }
    
    
    
    
    
    
}
