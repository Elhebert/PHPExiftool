<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEExposureTime extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEExposureTime';

    protected string $name = 'AEExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196264
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEExposureTime',
            'desc' => [
                'en' => 'AE Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196473
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEExposureTime',
            'desc' => [
                'en' => 'AE Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::AEInfo3
             * line : 196584
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo3.Pentax:AEExposureTime',
            'desc' => [
                'en' => 'AE Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
