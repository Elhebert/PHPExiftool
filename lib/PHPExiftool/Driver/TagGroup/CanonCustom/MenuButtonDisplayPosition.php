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
class MenuButtonDisplayPosition extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:MenuButtonDisplayPosition';

    protected string $name = 'MenuButtonDisplayPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 71663
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:MenuButtonDisplayPosition',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 75980
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:MenuButtonDisplayPosition',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 76501
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:MenuButtonDisplayPosition',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 77619
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:MenuButtonDisplayPosition',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
