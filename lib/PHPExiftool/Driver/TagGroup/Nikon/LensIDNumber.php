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
class LensIDNumber extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensIDNumber';

    protected string $name = 'LensIDNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens ID Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132472
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:LensIDNumber',
            'desc' => [
                'en' => 'Lens ID Number',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132515
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:LensIDNumber',
            'desc' => [
                'en' => 'Lens ID Number',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132561
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:LensIDNumber',
            'desc' => [
                'en' => 'Lens ID Number',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132640
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:LensIDNumber',
            'desc' => [
                'en' => 'Lens ID Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
