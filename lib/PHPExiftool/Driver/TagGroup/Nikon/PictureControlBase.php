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
class PictureControlBase extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlBase';

    protected string $name = 'PictureControlBase';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control Base',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137341
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlBase',
            'desc' => [
                'en' => 'Picture Control Base',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137450
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlBase',
            'desc' => [
                'en' => 'Picture Control Base',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137562
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlBase',
            'desc' => [
                'en' => 'Picture Control Base',
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
