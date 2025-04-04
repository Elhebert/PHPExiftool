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
class FocusDistance extends AbstractTagGroup
{
    protected string $id = 'Olympus:FocusDistance';

    protected string $name = 'FocusDistance';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175899
             * type : rational64u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
