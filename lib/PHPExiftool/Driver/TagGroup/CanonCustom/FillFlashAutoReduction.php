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
class FillFlashAutoReduction extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:FillFlashAutoReduction';

    protected string $name = 'FillFlashAutoReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fill Flash Auto Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53412
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:FillFlashAutoReduction',
            'desc' => [
                'en' => 'Fill Flash Auto Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53674
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:FillFlashAutoReduction',
            'desc' => [
                'en' => 'Fill Flash Auto Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56899
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:FillFlashAutoReduction',
            'desc' => [
                'en' => 'Fill Flash Auto Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
