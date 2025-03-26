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
class ColorTempUnknown26 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown26';

    protected string $name = 'ColorTempUnknown26';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 26',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46434
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown26',
            'desc' => [
                'en' => 'Color Temp Unknown 26',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46698
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown26',
            'desc' => [
                'en' => 'Color Temp Unknown 26',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47746
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown26',
            'desc' => [
                'en' => 'Color Temp Unknown 26',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48034
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown26',
            'desc' => [
                'en' => 'Color Temp Unknown 26',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
