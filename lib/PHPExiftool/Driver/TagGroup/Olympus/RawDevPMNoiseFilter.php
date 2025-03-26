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
class RawDevPMNoiseFilter extends AbstractTagGroup
{
    protected string $id = 'Olympus:RawDevPMNoiseFilter';

    protected string $name = 'RawDevPMNoiseFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Dev PM Noise Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawDevelopment2
             * line : 180060
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment2.Olympus:RawDevPMNoiseFilter',
            'desc' => [
                'en' => 'Raw Dev PM Noise Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
