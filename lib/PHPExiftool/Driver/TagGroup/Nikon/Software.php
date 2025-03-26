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
class Software extends AbstractTagGroup
{
    protected string $id = 'Nikon:Software';

    protected string $name = 'Software';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Software',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 129894
             * type : undef
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:Software',
            'desc' => [
                'en' => 'Software',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MOV
             * line : 132826
             * type : string
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:Software',
            'desc' => [
                'en' => 'Software',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136911
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:Software',
            'desc' => [
                'en' => 'Software',
            ],
        ],
    ];

    protected int $count = 16;

    protected int $flags = 4;
}
