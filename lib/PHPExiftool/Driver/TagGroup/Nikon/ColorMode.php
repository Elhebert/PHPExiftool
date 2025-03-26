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
class ColorMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:ColorMode';

    protected string $name = 'ColorMode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 130026
             * type : string
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::Main
             * line : 132842
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::Type2
             * line : 141277
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Type2.Nikon:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
