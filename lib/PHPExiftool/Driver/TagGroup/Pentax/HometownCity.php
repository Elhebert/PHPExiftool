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
class HometownCity extends AbstractTagGroup
{
    protected string $id = 'Pentax:HometownCity';

    protected string $name = 'HometownCity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hometown City',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 207961
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:HometownCity',
            'desc' => [
                'en' => 'Hometown City',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::TimeInfo
             * line : 210049
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::TimeInfo.Pentax:HometownCity',
            'desc' => [
                'en' => 'Hometown City',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
