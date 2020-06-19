<?php

namespace MultiProtocol\protocol\v310;

use pocketmine\network\mcpe\protocol\DataPacket;
use MultiProtocol\protocol\Info;

class SpawnParticleEffectPacket extends DataPacket {

    public const NETWORK_ID = Info::SPAWN_PARTICLE_EFFECT_PACKET;

    public $x;
    public $y;
    public $z;
    public $dimensionId = 0;
    public $entityUniqueId = 1;
    public $particleName;

    protected function decodePayload() {

    }

    protected function encodePayload() {

    }

}
