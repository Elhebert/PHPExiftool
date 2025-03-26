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
class ColorTempUnknown28 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown28';

    protected string $name = 'ColorTempUnknown28';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 28',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46446
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown28',
            'desc' => [
                'en' => 'Color Temp Unknown 28',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47758
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown28',
            'desc' => [
                'en' => 'Color Temp Unknown 28',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48046
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown28',
            'desc' => [
                'en' => 'Color Temp Unknown 28',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
