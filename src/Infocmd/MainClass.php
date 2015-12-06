<?php

namespace Infocmd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener{
	public function onEnable(){
		$this->getLogger()->info(TextFormat::DARK_GREEN . "InfoCmd has been enabled!");
    		$this->saveDefaultConfig();
    	}
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
         switch($command->getName()){
             case "info1":
             $sender->sendMessage($this->getConfig()->get("info1"));
             break;
             case "info2":
                  $player = $sender->getPlayer();
             $sender->sendMessage($this->getConfig()->get("info2"));
             break;
         }
    }
}
