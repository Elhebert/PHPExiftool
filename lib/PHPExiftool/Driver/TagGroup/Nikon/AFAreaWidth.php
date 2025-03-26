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
class AFAreaWidth extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFAreaWidth';

    protected string $name = 'AFAreaWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128901
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
            'desc' => [
                'en' => 'AF Area Width',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128942
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
            'desc' => [
                'en' => 'AF Area Width',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129802
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
            'desc' => [
                'en' => 'AF Area Width',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::AFInfo2V0400
             * line : 129838
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2V0400.Nikon:AFAreaWidth',
            'desc' => [
                'en' => 'AF Area Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
