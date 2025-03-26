<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nintendo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStamp extends AbstractTagGroup
{
    protected string $id = 'Nintendo:TimeStamp';

    protected string $name = 'TimeStamp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Stamp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nintendo::CameraInfo
             * line : 171660
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nintendo::CameraInfo.Nintendo:TimeStamp',
            'desc' => [
                'en' => 'Time Stamp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
