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
class AddOriginalDecisionData extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AddOriginalDecisionData';

    protected string $name = 'AddOriginalDecisionData';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Add Original Decision Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55632
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AddOriginalDecisionData',
            'desc' => [
                'en' => 'Add Original Decision Data',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55959
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:AddOriginalDecisionData',
            'desc' => [
                'en' => 'Add Original Decision Data',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56217
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:AddOriginalDecisionData',
            'desc' => [
                'en' => 'Add Original Decision Data',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56764
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:AddOriginalDecisionData',
            'desc' => [
                'en' => 'Add Original Decision Data',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
