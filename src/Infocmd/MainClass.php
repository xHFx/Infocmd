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
	public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . "InfoCmd has been loaded!");
	}
	public function onEnable(){
		$this->getLogger()->info(TextFormat::DARK_GREEN . "InfoCmd has been enabled!");
    	$this->saveDefaultConfig();
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
         switch($command->getName()){
             case "info":
                  $player = $sender->getPlayer();
             foreach($this->getConfig()->get("info") as $info){
               $player->sendMessage($this->getConfig()->get("prefix"). $info . "!");}
                 return true;
             break;
         }
    }
}
