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
class ISOAutoHiLimit extends AbstractTagGroup
{
    protected string $id = 'Nikon:ISOAutoHiLimit';

    protected string $name = 'ISOAutoHiLimit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Auto Hi Limit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135423
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:ISOAutoHiLimit',
            'desc' => [
                'en' => 'ISO Auto Hi Limit',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 139129
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:ISOAutoHiLimit',
            'desc' => [
                'en' => 'ISO Auto Hi Limit',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139796
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:ISOAutoHiLimit',
            'desc' => [
                'en' => 'ISO Auto Hi Limit',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140910
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:ISOAutoHiLimit',
            'desc' => [
                'en' => 'ISO Auto Hi Limit',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
