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
class ValidBits extends AbstractTagGroup
{
    protected string $id = 'Olympus:ValidBits';

    protected string $name = 'ValidBits';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Valid Bits',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176218
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:ValidBits',
            'desc' => [
                'en' => 'Valid Bits',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178756
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:ValidBits',
            'desc' => [
                'en' => 'Valid Bits',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
