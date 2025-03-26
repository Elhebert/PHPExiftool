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
class MaximumAcrossScanDistortion extends AbstractTagGroup
{
    protected string $id = 'DICOM:MaximumAcrossScanDistortion';

    protected string $name = 'MaximumAcrossScanDistortion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Maximum Across Scan Distortion',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71758
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MaximumAcrossScanDistortion',
            'desc' => [
                'en' => 'Maximum Across Scan Distortion',
            ],
        ],
    ];

    protected int $count = 0;
}
