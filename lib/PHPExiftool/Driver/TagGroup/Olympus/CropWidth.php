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
class CropWidth extends AbstractTagGroup
{
    protected string $id = 'Olympus:CropWidth';

    protected string $name = 'CropWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Crop Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176227
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::ImageProcessing.Olympus:CropWidth',
            'desc' => [
                'en' => 'Crop Width',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180246
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:CropWidth',
            'desc' => [
                'en' => 'Crop Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
