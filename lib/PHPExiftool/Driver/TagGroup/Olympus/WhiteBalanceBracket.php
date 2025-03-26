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
class WhiteBalanceBracket extends AbstractTagGroup
{
    protected string $id = 'Olympus:WhiteBalanceBracket';

    protected string $name = 'WhiteBalanceBracket';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Bracket',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173248
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:WhiteBalanceBracket',
            'desc' => [
                'en' => 'White Balance Bracket',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178363
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:WhiteBalanceBracket',
            'desc' => [
                'en' => 'White Balance Bracket',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
