<?php 

namespace NightWishTR\Koruma;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\Player;
use pocketmine\level\Level;

class area extends PluginBase implements Listener{
public function onEnable(){

$this->getLogger()->info("Plugin Aktif");
$this->getServer()->getPluginManager()->registerEvents($this, $this);

}//onEnable

public function blokKoruma(BlockBreakEvent $event){
$oyuncu = $event->getPlayer();
$blok = $event->getBlock();

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>> RANK MATERİAL <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

if($oyuncu->getLevel()->getFolderName("world") || $oyuncu->getLevel()->getFolderName("world") || $oyuncu->getLevel()->getFolderName("world") || $oyuncu->getLevel()->getFolderName("world")){
if(!$oyuncu->hasPermission("area.coal")){
  if ($event->getBlock()->getId() == "16") {
  $event->setCancelled();
  $oyuncu->sendMessage("§8» §cYour rank is not enough to break this metal");
  }
}

if(!$oyuncu->hasPermission("area.iron")){
  if ($event->getBlock()->getId() == "42") {
  $event->setCancelled();
  $oyuncu->sendMessage("§8» §cYour rank is not enough to break this metal");
  }
}

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>> VIP HAMMADDE <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

if(!$oyuncu->hasPermission("area.gold")){
  if ($event->getBlock()->getId() == "14") {
  $event->setCancelled();
  $oyuncu->sendMessage("§8» §cYou should get a VIP to break this mine");
  }
}
  
  if(!$oyuncu->hasPermission("area.emerald")){
  if ($event->getBlock()->getId() == "129") {
  $event->setCancelled();
  $oyuncu->sendMessage("§8» §cYou should get a VIP to break this mine");
  }
}

if(!$oyuncu->hasPermission("area.diamond")){
  if ($event->getBlock()->getId() == "56") {
  $event->setCancelled();
  $oyuncu->sendMessage("§8» §cYou should get a VIP to break this mine");
  }
}

  }//end of dunya
 }//end is event
}//class