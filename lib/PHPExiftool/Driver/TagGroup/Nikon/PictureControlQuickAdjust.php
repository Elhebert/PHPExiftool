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
class PictureControlQuickAdjust extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlQuickAdjust';

    protected string $name = 'PictureControlQuickAdjust';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control Quick Adjust',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137358
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlQuickAdjust',
            'desc' => [
                'en' => 'Picture Control Quick Adjust',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137467
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlQuickAdjust',
            'desc' => [
                'en' => 'Picture Control Quick Adjust',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137579
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlQuickAdjust',
            'desc' => [
                'en' => 'Picture Control Quick Adjust',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
