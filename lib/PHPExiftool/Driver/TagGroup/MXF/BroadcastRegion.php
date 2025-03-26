<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BroadcastRegion extends AbstractTagGroup
{
    protected string $id = 'MXF:BroadcastRegion';

    protected string $name = 'BroadcastRegion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Broadcast Region',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114129
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BroadcastRegion',
            'desc' => [
                'en' => 'Broadcast Region',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116334
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BroadcastRegion',
            'desc' => [
                'en' => 'Broadcast Region',
            ],
        ],
    ];

    protected int $count = 0;
}
