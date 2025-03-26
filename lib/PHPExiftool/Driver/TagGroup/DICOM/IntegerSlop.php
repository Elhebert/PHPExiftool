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
class IntegerSlop extends AbstractTagGroup
{
    protected string $id = 'DICOM:IntegerSlop';

    protected string $name = 'IntegerSlop';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Integer Slop',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71578
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IntegerSlop',
            'desc' => [
                'en' => 'Integer Slop',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 71581
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IntegerSlop',
            'desc' => [
                'en' => 'Integer Slop',
            ],
        ],
        2 => [
            /**
             * table_name : DICOM::Main
             * line : 71584
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IntegerSlop',
            'desc' => [
                'en' => 'Integer Slop',
            ],
        ],
        3 => [
            /**
             * table_name : DICOM::Main
             * line : 71587
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IntegerSlop',
            'desc' => [
                'en' => 'Integer Slop',
            ],
        ],
        4 => [
            /**
             * table_name : DICOM::Main
             * line : 71590
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:IntegerSlop',
            'desc' => [
                'en' => 'Integer Slop',
            ],
        ],
    ];

    protected int $count = 0;
}
