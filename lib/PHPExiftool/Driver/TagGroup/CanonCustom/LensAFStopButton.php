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
class LensAFStopButton extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:LensAFStopButton';

    protected string $name = 'LensAFStopButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens AF Stop Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53445
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53735
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54474
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55936
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56194
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56741
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56885
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:LensAFStopButton',
            'desc' => [
                'en' => 'Lens AF Stop Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
