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
class AcquisitionDuration extends AbstractTagGroup
{
    protected string $id = 'DICOM:AcquisitionDuration';

    protected string $name = 'AcquisitionDuration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Acquisition Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70087
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:AcquisitionDuration',
            'desc' => [
                'en' => 'Acquisition Duration',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 70903
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:AcquisitionDuration',
            'desc' => [
                'en' => 'Acquisition Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
