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
class MagicFilter extends AbstractTagGroup
{
    protected string $id = 'Olympus:MagicFilter';

    protected string $name = 'MagicFilter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Magic Filter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173802
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:MagicFilter',
            'desc' => [
                'en' => 'Magic Filter',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
