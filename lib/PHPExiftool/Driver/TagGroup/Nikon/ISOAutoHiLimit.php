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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 200486
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:ISOAutoHiLimit',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 206809
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:ISOAutoHiLimit',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 207578
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:ISOAutoHiLimit',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 209009
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:ISOAutoHiLimit',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
