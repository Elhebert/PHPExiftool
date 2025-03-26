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
class AFImageHeight extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFImageHeight';

    protected string $name = 'AFImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128892
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128924
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129793
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::AFInfo2V0400
             * line : 129829
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2V0400.Nikon:AFImageHeight',
            'desc' => [
                'en' => 'AF Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
