<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FloatSlop extends AbstractTagGroup
{
    protected string $id = 'DICOM:FloatSlop';

    protected string $name = 'FloatSlop';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Float Slop',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71593
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FloatSlop',
            'desc' => [
                'en' => 'Float Slop',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 71596
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FloatSlop',
            'desc' => [
                'en' => 'Float Slop',
            ],
        ],
        2 => [
            /**
             * table_name : DICOM::Main
             * line : 71599
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FloatSlop',
            'desc' => [
                'en' => 'Float Slop',
            ],
        ],
        3 => [
            /**
             * table_name : DICOM::Main
             * line : 71602
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FloatSlop',
            'desc' => [
                'en' => 'Float Slop',
            ],
        ],
        4 => [
            /**
             * table_name : DICOM::Main
             * line : 71605
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FloatSlop',
            'desc' => [
                'en' => 'Float Slop',
            ],
        ],
    ];

    protected int $count = 0;
}
