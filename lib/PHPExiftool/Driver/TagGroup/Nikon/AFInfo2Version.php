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
class AFInfo2Version extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFInfo2Version';

    protected string $name = 'AFInfo2Version';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Info 2 Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127346
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFInfo2Version',
            'desc' => [
                'en' => 'AF Info 2 Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2V0400
             * line : 129823
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2V0400.Nikon:AFInfo2Version',
            'desc' => [
                'en' => 'AF Info 2 Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
