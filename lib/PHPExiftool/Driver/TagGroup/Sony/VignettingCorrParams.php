<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrParams extends AbstractTagGroup
{
    protected string $id = 'Sony:VignettingCorrParams';

    protected string $name = 'VignettingCorrParams';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vignetting Corr Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 273670
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275975
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275981
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275987
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 275990
             * type : int16s
             * writable : true
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278934
             * type : int16s
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278937
             * type : int16s
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
            'desc' => [
                'en' => 'Vignetting Corr Params',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 2052;
}
