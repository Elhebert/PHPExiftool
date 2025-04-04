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
class ImageQuality extends AbstractTagGroup
{
    protected string $id = 'Nikon:ImageQuality';

    protected string $name = 'ImageQuality';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 138575
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:ImageQuality',
            'desc' => [
                'en' => 'Image Quality',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138654
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ImageQuality',
            'desc' => [
                'en' => 'Image Quality',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD80
             * line : 140443
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD80.Nikon:ImageQuality',
            'desc' => [
                'en' => 'Image Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
