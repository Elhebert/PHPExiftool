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
class MeasuredEV2 extends AbstractTagGroup
{
    protected string $id = 'Canon:MeasuredEV2';

    protected string $name = 'MeasuredEV2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Measured EV 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13137
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:MeasuredEV2',
            'desc' => [
                'en' => 'Measured EV 2',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40077
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:MeasuredEV2',
            'desc' => [
                'en' => 'Measured EV 2',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52844
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:MeasuredEV2',
            'desc' => [
                'en' => 'Measured EV 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
