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
class BlackLevel2 extends AbstractTagGroup
{
    protected string $id = 'Olympus:BlackLevel2';

    protected string $name = 'BlackLevel2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Black Level 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176212
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:BlackLevel2',
            'desc' => [
                'en' => 'Black Level 2',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180231
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:BlackLevel2',
            'desc' => [
                'en' => 'Black Level 2',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
