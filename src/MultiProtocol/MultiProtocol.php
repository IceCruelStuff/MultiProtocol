<?php

declare(strict_types=1);

namespace MultiProtocol;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

/**
 * Class MultiProtocol
 * @package multiprotocol
 * 
 */
class MultiProtocol extends PluginBase implements Listener {

    private $players = [];

    public function onEnable() {
        $this->checkProtocol();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function checkProtocol() {
        if (ProtocolInfo::CURRENT_PROTOCOL < 137) {
            $this->getServer()->getLogger("Protocol versions under 137 are not supported");
        }
    }

    public function onDataPacketReveive(DataPacketReceiveEvent $event) {
        $packet = $event->getPacket();
        $player = $event->getPlayer();
        if (!in_array($player->getName(), $this->players)) {
            if ($packet instanceof LoginPacket) {
                switch ($packet->protocol) {
                    default:
                        break;
                }
            }
        }
    }

}
