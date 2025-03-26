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
class PictureControlAdjust extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlAdjust';

    protected string $name = 'PictureControlAdjust';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control Adjust',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlAdjust',
            'desc' => [
                'en' => 'Picture Control Adjust',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137453
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlAdjust',
            'desc' => [
                'en' => 'Picture Control Adjust',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137565
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlAdjust',
            'desc' => [
                'en' => 'Picture Control Adjust',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
