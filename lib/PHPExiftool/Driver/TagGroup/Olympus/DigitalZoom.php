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
class DigitalZoom extends AbstractTagGroup
{
    protected string $id = 'Olympus:DigitalZoom';

    protected string $name = 'DigitalZoom';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177432
             * type : rational64u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:DigitalZoom',
            'desc' => [
                'en' => 'Digital Zoom',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
