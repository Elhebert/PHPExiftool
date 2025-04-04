<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStamp extends AbstractTagGroup
{
    protected string $id = 'Canon:TimeStamp';

    protected string $name = 'TimeStamp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Stamp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CTMD
             * line : 2802
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CTMD.Canon:TimeStamp',
            'desc' => [
                'en' => 'Time Stamp',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11429
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:TimeStamp',
            'desc' => [
                'en' => 'Time Stamp',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26721
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:TimeStamp',
            'desc' => [
                'en' => 'Time Stamp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
