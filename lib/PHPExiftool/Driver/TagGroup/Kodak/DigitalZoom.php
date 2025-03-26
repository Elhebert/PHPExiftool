<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoom extends AbstractTagGroup
{
    protected string $id = 'Kodak:DigitalZoom';

    protected string $name = 'DigitalZoom';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Main
             * line : 108874
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Type5
             * line : 109674
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::Type6
             * line : 109735
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type6.Kodak:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
