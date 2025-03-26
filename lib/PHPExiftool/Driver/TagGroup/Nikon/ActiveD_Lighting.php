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
class ActiveD_Lighting extends AbstractTagGroup
{
    protected string $id = 'Nikon:ActiveD-Lighting';

    protected string $name = 'ActiveD-Lighting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Active D-Lighting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 132980
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ActiveD-Lighting',
            'desc' => [
                'en' => 'Active D-Lighting',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137190
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:ActiveD-Lighting',
            'desc' => [
                'en' => 'Active D-Lighting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
