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
class TableStartLocation extends AbstractTagGroup
{
    protected string $id = 'DICOM:TableStartLocation';

    protected string $name = 'TableStartLocation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Table Start Location',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71542
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TableStartLocation',
            'desc' => [
                'en' => 'Table Start Location',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 71905
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TableStartLocation',
            'desc' => [
                'en' => 'Table Start Location',
            ],
        ],
    ];

    protected int $count = 0;
}
