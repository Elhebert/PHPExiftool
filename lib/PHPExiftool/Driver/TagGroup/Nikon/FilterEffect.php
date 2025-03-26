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
class FilterEffect extends AbstractTagGroup
{
    protected string $id = 'Nikon:FilterEffect';

    protected string $name = 'FilterEffect';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137376
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:FilterEffect',
            'desc' => [
                'en' => 'Filter Effect',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137488
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:FilterEffect',
            'desc' => [
                'en' => 'Filter Effect',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137603
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:FilterEffect',
            'desc' => [
                'en' => 'Filter Effect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
