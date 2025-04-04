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
class SmallestPixelValueInSeries extends AbstractTagGroup
{
    protected string $id = 'DICOM:SmallestPixelValueInSeries';

    protected string $name = 'SmallestPixelValueInSeries';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Smallest Pixel Value In Series',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72081
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SmallestPixelValueInSeries',
            'desc' => [
                'en' => 'Smallest Pixel Value In Series',
            ],
        ],
    ];

    protected int $count = 0;
}
