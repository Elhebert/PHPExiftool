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
class PictureControlName extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlName';

    protected string $name = 'PictureControlName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137338
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:PictureControlName',
            'desc' => [
                'en' => 'Picture Control Name',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137447
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:PictureControlName',
            'desc' => [
                'en' => 'Picture Control Name',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137559
             * type : string
             * writable : true
             * count : 20
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:PictureControlName',
            'desc' => [
                'en' => 'Picture Control Name',
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 2052;
}
