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
class ColorTempUnknown29 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown29';

    protected string $name = 'ColorTempUnknown29';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 29',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46452
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown29',
            'desc' => [
                'en' => 'Color Temp Unknown 29',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47764
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown29',
            'desc' => [
                'en' => 'Color Temp Unknown 29',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48052
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown29',
            'desc' => [
                'en' => 'Color Temp Unknown 29',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
