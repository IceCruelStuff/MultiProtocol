<?php

namespace MultiProtocol\protocol\v120;

use pocketmine\network\mcpe\protocol\DataPacket;
use MultiProtocol\Info;

class BossEventPacket extends DataPacket {

    public const NETWORK_ID = Info::BOSS_EVENT_PACKET;

    public const EVENT_TYPE_ADD = 0;
    public EVENT_TYPE_PLAYER_ADDED = 1; // from client to server only
    public EVENT_TYPE_REMOVE = 2;
    public EVENT_TYPE_PLAYER_REMOVED = 3;
    public EVENT_TYPE_UPDATE_PERCENT = 4; // from server to client only
    public EVENT_TYPE_UPDATE_NAME = 5;
    public EVENT_TYPE_UPDATE_PROPERTIES = 6;
    public EVENT_TYPE_UPDATE_STYLE = 7;

    protected function decodePayload() {

    }

    protected function encodePayload() {

    }

}
