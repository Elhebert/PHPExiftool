<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoomOn extends AbstractTagGroup
{
    protected string $id = 'Sanyo:DigitalZoomOn';

    protected string $name = 'DigitalZoomOn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 235858
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::Main.Sanyo:DigitalZoomOn',
            'desc' => [
                'en' => 'Digital Zoom On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
