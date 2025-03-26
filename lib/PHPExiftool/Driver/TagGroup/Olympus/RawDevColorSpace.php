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
class RawDevColorSpace extends AbstractTagGroup
{
    protected string $id = 'Olympus:RawDevColorSpace';

    protected string $name = 'RawDevColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Dev Color Space',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawDevelopment
             * line : 179793
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment.Olympus:RawDevColorSpace',
            'desc' => [
                'en' => 'Raw Dev Color Space',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::RawDevelopment2
             * line : 179932
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawDevelopment2.Olympus:RawDevColorSpace',
            'desc' => [
                'en' => 'Raw Dev Color Space',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
