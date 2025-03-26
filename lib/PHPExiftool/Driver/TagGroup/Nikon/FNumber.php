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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Nikon:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 129932
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132735
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::MOV
             * line : 132794
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136961
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
