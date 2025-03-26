<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTemperature extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:ColorTemperature';

    protected string $name = 'ColorTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127172
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127189
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : MinoltaRaw::RIF
             * line : 127195
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'MinoltaRaw::RIF.MinoltaRaw:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
