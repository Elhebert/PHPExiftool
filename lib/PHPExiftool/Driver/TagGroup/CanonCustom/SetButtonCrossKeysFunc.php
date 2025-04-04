<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetButtonCrossKeysFunc extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SetButtonCrossKeysFunc';

    protected string $name = 'SetButtonCrossKeysFunc';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Set Button Cross Keys Func',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56232
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:SetButtonCrossKeysFunc',
            'desc' => [
                'en' => 'Set Button Cross Keys Func',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56353
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:SetButtonCrossKeysFunc',
            'desc' => [
                'en' => 'Set Button Cross Keys Func',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
