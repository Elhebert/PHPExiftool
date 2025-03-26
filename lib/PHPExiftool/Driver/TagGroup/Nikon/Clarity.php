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
class Clarity extends AbstractTagGroup
{
    protected string $id = 'Nikon:Clarity';

    protected string $name = 'Clarity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Clarity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl2
             * line : 137473
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl2.Nikon:Clarity',
            'desc' => [
                'en' => 'Clarity',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137588
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:Clarity',
            'desc' => [
                'en' => 'Clarity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
