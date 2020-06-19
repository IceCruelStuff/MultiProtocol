<?php

namespace MultiProtocol\protocol\v392

use pocketmine\network\mcpe\protocol\DataPacket;
use MultiProtocol\protocol\Info;

class CreativeItemsListPacket extends DataPacket {

    public const NETWORK_ID = Info::CREATIVE_ITEMS_LIST_PACKET;

    public $groups;
    public $items;

    protected function decodePayload() {

    }

    protected function encodePayload() {

    }

}
