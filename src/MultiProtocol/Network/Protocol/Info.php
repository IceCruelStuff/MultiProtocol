<?php

namespace MultiProtocol\Network\Protocol;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class Info extends ProtocolInfo {

    const CURRENT_PROTOCOL = 261;
    const ACCEPTED_PROTOCOLS = [261, 274, 282, 291, 313, 332, 340, 354, 361, 388, 389, 390, 407, 408, 419];

    const PROTOCOL_261 = 261; // 1.4.0
    const PROTOCOL_274 = 274; // 1.5.0
    const PROTOCOL_282 = 282; // 1.6.0
    const PROTOCOL_291 = 291; // 1.7.0
    const PROTOCOL_313 = 313; // 1.8.0
    const PROTOCOL_332 = 332; // 1.9.0
    const PROTOCOL_340 = 340; // 1.10.0
    const PROTOCOL_354 = 354; // 1.11.0
    const PROTOCOL_361 = 361; // 1.12.0
    const PROTOCOL_388 = 388; // 1.13.0
    const PROTOCOL_389 = 389; // 1.14.0
    const PROTOCOL_390 = 390; // 1.14.60
    const PROTOCOL_407 = 407; // 1.16.0
    const PROTOCOL_408 = 408; // 1.16.20
    const PROTOCOL_419 = 419; // 1.16.100

}
