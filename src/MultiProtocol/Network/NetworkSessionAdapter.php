<?php

namespace MultiProtocol\Network;

use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\network\mcpe\PlayerNetworkSessionAdapter;
use MultiProtocol\Network\Protocol\Info;

class NetworkSessionAdapter extends PlayerNetworkSessionAdapter {
/*
    public function handleLogin(LoginPacket $packet) : bool {
        if (!in_array($packet->protocol, Info::ACCEPTED_PROTOCOLS)) {
            return;
        }
    }
*/
}
