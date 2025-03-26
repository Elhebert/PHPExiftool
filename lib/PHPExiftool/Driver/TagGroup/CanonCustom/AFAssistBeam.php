<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAssistBeam extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AFAssistBeam';

    protected string $name = 'AFAssistBeam';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Assist Beam',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54686
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54700
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55789
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56036
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56291
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56415
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56575
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:AFAssistBeam',
            'desc' => [
                'en' => 'AF Assist Beam',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
