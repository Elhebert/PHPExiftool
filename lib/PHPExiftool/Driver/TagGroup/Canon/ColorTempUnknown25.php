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
class ColorTempUnknown25 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown25';

    protected string $name = 'ColorTempUnknown25';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 25',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46428
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown25',
            'desc' => [
                'en' => 'Color Temp Unknown 25',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46692
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown25',
            'desc' => [
                'en' => 'Color Temp Unknown 25',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47740
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown25',
            'desc' => [
                'en' => 'Color Temp Unknown 25',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48028
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown25',
            'desc' => [
                'en' => 'Color Temp Unknown 25',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
