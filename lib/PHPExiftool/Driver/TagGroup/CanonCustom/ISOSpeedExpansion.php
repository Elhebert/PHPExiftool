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
class ISOSpeedExpansion extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ISOSpeedExpansion';

    protected string $name = 'ISOSpeedExpansion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Speed Expansion',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53505
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:ISOSpeedExpansion',
            'desc' => [
                'en' => 'ISO Speed Expansion',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
