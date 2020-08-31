<?php

namespace RulesUI;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

   public function onEnable(){
      $this->getLogger()->info("RulesUI Enable");
   }
   
   public function onDisable(){
      $this->getLogger()->info("RulesUI Disable");
   }
   
   public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
      switch($cmd->getName()){
         case "rules":
            if($sender instanceof Player){
               $this->RulesUI($sender);
            }else{
               $sender->sendMessage("Use this command in game");
            }
      }
      return true;
   }
   
   public function RulesUI($sender){
      $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

   }
}
