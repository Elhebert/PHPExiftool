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
class CameraType extends AbstractTagGroup
{
    protected string $id = 'Olympus:CameraType';

    protected string $name = 'CameraType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177441
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:CameraType',
            'desc' => [
                'en' => 'Camera Type',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::TextInfo
             * line : 180339
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::TextInfo.Olympus:CameraType',
            'desc' => [
                'en' => 'Camera Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
