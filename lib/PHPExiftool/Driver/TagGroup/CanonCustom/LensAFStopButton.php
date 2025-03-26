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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 71813
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 72320
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 73683
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 76118
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 76659
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 77797
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 78106
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:LensAFStopButton',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
