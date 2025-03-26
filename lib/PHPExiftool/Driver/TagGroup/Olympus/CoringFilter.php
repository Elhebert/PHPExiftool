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
class CoringFilter extends AbstractTagGroup
{
    protected string $id = 'Olympus:CoringFilter';

    protected string $name = 'CoringFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Coring Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176206
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:CoringFilter',
            'desc' => [
                'en' => 'Coring Filter',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178759
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:CoringFilter',
            'desc' => [
                'en' => 'Coring Filter',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180225
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:CoringFilter',
            'desc' => [
                'en' => 'Coring Filter',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
