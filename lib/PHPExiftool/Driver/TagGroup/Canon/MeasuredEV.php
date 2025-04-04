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
class MeasuredEV extends AbstractTagGroup
{
    protected string $id = 'Canon:MeasuredEV';

    protected string $name = 'MeasuredEV';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Measured EV',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40080
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:MeasuredEV',
            'desc' => [
                'en' => 'Measured EV',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52645
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:MeasuredEV',
            'desc' => [
                'en' => 'Measured EV',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
