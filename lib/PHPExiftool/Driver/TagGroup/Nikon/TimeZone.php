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
class TimeZone extends AbstractTagGroup
{
    protected string $id = 'Nikon:TimeZone';

    protected string $name = 'TimeZone';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Time Zone',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136677
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:TimeZone',
            'desc' => [
                'en' => 'Time Zone',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136926
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:TimeZone',
            'desc' => [
                'en' => 'Time Zone',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::WorldTime
             * line : 141368
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::WorldTime.Nikon:TimeZone',
            'desc' => [
                'en' => 'Time Zone',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
