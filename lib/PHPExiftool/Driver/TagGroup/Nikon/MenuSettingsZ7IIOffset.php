<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MenuSettingsZ7IIOffset extends AbstractTagGroup
{
    protected string $id = 'Nikon:MenuSettingsZ7IIOffset';

    protected string $name = 'MenuSettingsZ7IIOffset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Menu Settings Z7 II Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141200
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:MenuSettingsZ7IIOffset',
            'desc' => [
                'en' => 'Menu Settings Z7 II Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
