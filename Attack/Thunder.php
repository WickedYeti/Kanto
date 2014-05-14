<?php

namespace Ash\Attack;

use Ash\Attack;
use Ash\Type;

class Thunder extends Attack
{

    /** @var array */
    public $attacker = [
        'atk'   => 0.1,
        'spe'   => 0.2
    ];

    /** @var array */
    public $bonus = [
        Type::WATER => 1.2
    ];

    /** @var array */
    public $defender = [
        'atk'   => 0.1,
        'spe'   => 0.2
    ];

} 