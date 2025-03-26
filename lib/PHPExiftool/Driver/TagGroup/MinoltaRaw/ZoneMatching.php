<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZoneMatching extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:ZoneMatching';

    protected string $name = 'ZoneMatching';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Zone Matching',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127155
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ZoneMatching',
            'desc' => [
                'en' => 'Zone Matching',
            ],
        ],
        1 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127175
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ZoneMatching',
            'desc' => [
                'en' => 'Zone Matching',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
