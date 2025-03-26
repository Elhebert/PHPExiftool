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
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Pentax:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::MOV
             * line : 205935
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::MOV.Pentax:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 207462
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::PENT
             * line : 209722
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::PENT.Pentax:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
