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
class SensorCleaning extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SensorCleaning';

    protected string $name = 'SensorCleaning';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sensor Cleaning',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56941
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:SensorCleaning',
            'desc' => [
                'en' => 'Sensor Cleaning',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
