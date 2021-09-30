<?php

declare(strict_types=1);

namespace MultiProtocol;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use MultiProtocol\Network\Protocol\Info;

/**
 * Class MultiProtocol
 * @package multiprotocol
 * 
 */
class MultiProtocol extends PluginBase implements Listener {

    private $players = [];
    public static $acceptedProtocols = [];

    public function onEnable() {
        $this->checkProtocol();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $index = array_search(Info::ACCEPTED_PROTOCOLS, Info::CURRENT_PROTOCOL) + 1;
        self::$acceptedProtocols = array_slice(Info::ACCEPTED_PROTOCOLS, $index);
    }

    public function checkProtocol() {
        if (ProtocolInfo::CURRENT_PROTOCOL < Info::CURRENT_PROTOCOL) {
            $this->getServer()->getLogger("Protocol versions under " . Info::CURRENT_PROTOCOL . " are not supported");
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
