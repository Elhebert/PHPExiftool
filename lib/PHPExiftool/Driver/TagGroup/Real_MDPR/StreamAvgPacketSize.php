<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamAvgPacketSize extends AbstractTagGroup
{
    protected string $id = 'Real-MDPR:StreamAvgPacketSize';

    protected string $name = 'StreamAvgPacketSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Stream Avg Packet Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::MediaProps
             * line : 232478
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::MediaProps.Real-MDPR:StreamAvgPacketSize',
            'desc' => [
                'en' => 'Stream Avg Packet Size',
            ],
        ],
    ];

    protected int $count = 0;
}
