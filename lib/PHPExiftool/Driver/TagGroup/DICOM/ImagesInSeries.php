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
class ImagesInSeries extends AbstractTagGroup
{
    protected string $id = 'DICOM:ImagesInSeries';

    protected string $name = 'ImagesInSeries';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Images In Series',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71320
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImagesInSeries',
            'desc' => [
                'en' => 'Images In Series',
            ],
        ],
        1 => [
            /**
             * table_name : DICOM::Main
             * line : 71800
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ImagesInSeries',
            'desc' => [
                'en' => 'Images In Series',
            ],
        ],
    ];

    protected int $count = 0;
}
