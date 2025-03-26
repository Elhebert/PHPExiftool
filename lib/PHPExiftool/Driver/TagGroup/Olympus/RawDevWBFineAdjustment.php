<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDevWBFineAdjustment extends AbstractTagGroup
{
    protected string $id = 'Olympus:RawDevWBFineAdjustment';

    protected string $name = 'RawDevWBFineAdjustment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Dev WB Fine Adjustment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawDevelopment
             * line : 179775
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment.Olympus:RawDevWBFineAdjustment',
            'desc' => [
                'en' => 'Raw Dev WB Fine Adjustment',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::RawDevelopment2
             * line : 179914
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment2.Olympus:RawDevWBFineAdjustment',
            'desc' => [
                'en' => 'Raw Dev WB Fine Adjustment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
