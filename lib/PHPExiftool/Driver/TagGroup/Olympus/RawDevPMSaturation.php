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
class RawDevPMSaturation extends AbstractTagGroup
{
    protected string $id = 'Olympus:RawDevPMSaturation';

    protected string $name = 'RawDevPMSaturation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Dev PM Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawDevelopment2
             * line : 179994
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment2.Olympus:RawDevPMSaturation',
            'desc' => [
                'en' => 'Raw Dev PM Saturation',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
