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
class DoubleExposureFieldDelta extends AbstractTagGroup
{
    protected string $id = 'DICOM:DoubleExposureFieldDelta';

    protected string $name = 'DoubleExposureFieldDelta';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Double Exposure Field Delta',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74910
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DoubleExposureFieldDelta',
            'desc' => [
                'en' => 'Double Exposure Field Delta',
            ],
        ],
    ];

    protected int $count = 0;
}
