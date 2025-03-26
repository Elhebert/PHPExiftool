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
class SceneArea extends AbstractTagGroup
{
    protected string $id = 'Olympus:SceneArea';

    protected string $name = 'SceneArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175881
             * type : int32u
             * writable : true
             * count : 8
             * flags : permanent,unknown
             */
            'id' => 'Olympus::FocusInfo.Olympus:SceneArea',
            'desc' => [
                'en' => 'Scene Area',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178771
             * type : int32u
             * writable : true
             * count : 8
             * flags : permanent,unknown
             */
            'id' => 'Olympus::Main.Olympus:SceneArea',
            'desc' => [
                'en' => 'Scene Area',
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2084;
}
