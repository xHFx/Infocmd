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
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "InfoCmd has been enabled!");
     $this->saveDefaultConfig();
    }
	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "InfoCmd has been disabled!");
	}
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
         switch($command->getName()){
             case "info":
                  $player = $event->getPlayer();
             foreach($this->getConfig()->get("info") as $info){
               $player->sendMessage("[Info]" . $info . "!");}
                 return true;
             break;
                 return false;
         }
