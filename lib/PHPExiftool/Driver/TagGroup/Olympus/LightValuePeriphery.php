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
class LightValuePeriphery extends AbstractTagGroup
{
    protected string $id = 'Olympus:LightValuePeriphery';

    protected string $name = 'LightValuePeriphery';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Light Value Periphery',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178831
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:LightValuePeriphery',
            'desc' => [
                'en' => 'Light Value Periphery',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
