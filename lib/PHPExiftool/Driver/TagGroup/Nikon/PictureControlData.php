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
class PictureControlData extends AbstractTagGroup
{
    protected string $id = 'Nikon:PictureControlData';

    protected string $name = 'PictureControlData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Control Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133015
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::Main
             * line : 133018
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::Main
             * line : 133021
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::Main
             * line : 133024
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::Main
             * line : 134618
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137225
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::NCTG.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137228
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::NCTG.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137231
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::NCTG.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137234
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::NCTG.Nikon:PictureControlData',
            'desc' => [
                'en' => 'Picture Control Data',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
