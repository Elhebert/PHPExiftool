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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Nikon:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132955
             * type : string
             * writable : true
             * count :
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::Main.Nikon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::Main
             * line : 134556
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137031
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
