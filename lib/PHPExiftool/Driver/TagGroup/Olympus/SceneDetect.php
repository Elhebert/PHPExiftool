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
class SceneDetect extends AbstractTagGroup
{
    protected string $id = 'Olympus:SceneDetect';

    protected string $name = 'SceneDetect';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Scene Detect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175878
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:SceneDetect',
            'desc' => [
                'en' => 'Scene Detect',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178768
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:SceneDetect',
            'desc' => [
                'en' => 'Scene Detect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
