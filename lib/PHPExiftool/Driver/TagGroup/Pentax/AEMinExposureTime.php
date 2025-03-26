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
class AEMinExposureTime extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEMinExposureTime';

    protected string $name = 'AEMinExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Min Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196279
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEMinExposureTime',
            'desc' => [
                'en' => 'AE Min Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196577
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEMinExposureTime',
            'desc' => [
                'en' => 'AE Min Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::AEInfo3
             * line : 196602
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo3.Pentax:AEMinExposureTime',
            'desc' => [
                'en' => 'AE Min Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
