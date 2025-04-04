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
class AFAccelDecelTracking extends AbstractTagGroup
{
    protected string $id = 'Canon:AFAccelDecelTracking';

    protected string $name = 'AFAccelDecelTracking';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Accel/Decel Tracking',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFConfig
             * line : 2321
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFConfig.Canon:AFAccelDecelTracking',
            'desc' => [
                'en' => 'AF Accel/Decel Tracking',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
